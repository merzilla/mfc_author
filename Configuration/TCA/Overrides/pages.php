<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function () {

    $extkey = 'we_author';
    $ll = 'LLL:EXT:' . $extkey . '/Resources/Private/Language/locallang_tca.xml:';

    $columns = [
        'tx_weauthor_domain_model_author' => [
            'exclude' => 0,
            'label' => $ll . 'pages.tx_weauthor_author',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_weauthor_domain_model_author',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'pages',
        $columns,
        true
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'metatags',
        '--linebreak--, tx_weauthor_domain_model_author',
        'after:description'
    );

});
