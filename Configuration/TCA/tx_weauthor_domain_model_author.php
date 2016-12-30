<?php
defined('TYPO3_MODE') or die('Access denied.');

return call_user_func(function () {

    $extkey = 'we_author';
    $ll = 'LLL:EXT:' . $extkey . '/Resources/Private/Language/locallang_tca.xml:';

    return [
        'ctrl' => [
            'title' => $ll . 'tx_weauthor_author',
            'label' => 'name',
            'label_alt' => 'firstname',
            'label_alt_force' => 1,
            'crdate' => 'crdate',
            'tstamp' => 'tstamp',
            'default_sortby' => 'ORDER BY name',
            'iconfile' => 'EXT:we_author/Resources/Public/Icon/fe_users.gif',
            'searchFields' => 'uid,firstname,name,description,email,profil_link,xing,facebook,twitter',
        ],
        'interface' => [
            'showRecordFieldList' => 'firstname,name,email,profil_link',
        ],
        'columns' => [
            'firstname' => [
                'exclude' => 1,
                'label' => $ll . 'pages.tx_weauthor_firstname',
                'config' => [
                    'type' => 'input',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'name' => [
                'exclude' => 1,
                'label' => $ll . 'pages.tx_weauthor_name',
                'config' => [
                    'type' => 'input',
                    'size' => '30',
                    'eval' => 'trim',
                ],
            ],
            'email' => [
                'exclude' => 1,
                'label' => $ll . 'pages.tx_weauthor_email',
                'config' => [
                    'type' => 'input',
                    'size' => '50',
                    'eval' => 'trim',
                ],
            ],
            'profil_link' => [
                'exclude' => 1,
                'label' => $ll . 'pages.tx_weauthor_profil_link',
                'config' => [
                    'type' => 'input',
                    'size' => '75',
                    'eval' => 'trim',
                ],
            ],

            'we_author_image' => [
                'exclude' => 0,
                'label' => $ll . 'pages.tx_weauthor_image',
                'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('we_author_image'),
            ],
            'description' => [
                'exclude' => 1,
                'label' => $ll . 'pages.tx_weauthor_description',
                'config' => [
                    'type' => 'text',
                    'size' => '200',
                    'eval' => 'trim',
                ],
            ],
            'xing' => [
                'exclude' => 1,
                'label' => $ll . 'pages.tx_weauthor_xing',
                'config' => [
                    'type' => 'input',
                    'size' => '75',
                    'eval' => 'trim',
                ],
            ],
            'facebook' => [
                'exclude' => 1,
                'label' => $ll . 'pages.tx_weauthor_facebook',
                'config' => [
                    'type' => 'input',
                    'size' => '75',
                    'eval' => 'trim',
                ],
            ],
            'twitter' => [
                'exclude' => 1,
                'label' => $ll . 'pages.tx_weauthor_twitter',
                'config' => [
                    'type' => 'input',
                    'size' => '75',
                    'eval' => 'trim',
                ],
            ],
        ],
        'types' => [
            '0' => ['showitem' => 'hidden,--palette--;;1,firstname,name,we_author_image,description,email,profil_link,xing,facebook,twitter'],
        ],
        'palettes' => [
            '1' => ['showitem' => ''],
        ],
    ];
});
