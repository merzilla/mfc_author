<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TCA']['tx_mfcauthor_author'] = array(
    'ctrl' => $GLOBALS['TCA']['tx_mfcauthor_author']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => 'firstname,name,email,profil_link'
    ),
    'feInterface' => $GLOBALS['TCA']['tx_mfcauthor_author']['feInterface'],
    'columns' => array(
        'firstname' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_firstname',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            )
        ),
        'name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            )
        ),
        'email' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_email',
            'config' => array(
                'type' => 'input',
                'size' => '50',
                'eval' => 'trim',
            )
        ),
        'profil_link' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_profil_link',
            'config' => array(
                'type' => 'input',
                'size' => '75',
                'eval' => 'trim',
            )
        ),

        'mfc_author_image' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_image',
            'config' =>  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('mfc_author_image'),
        ),
        'description' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_description',
            'config' => array(
                'type' => 'text',
                'size' => '200',
                'eval' => 'trim',
            )
        ),
        'xing' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_xing',
            'config' => array(
                'type' => 'input',
                'size' => '75',
                'eval' => 'trim',
            )
        ),
        'facebook' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_facebook',
            'config' => array(
                'type' => 'input',
                'size' => '75',
                'eval' => 'trim',
            )
        ),
        'twitter' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_twitter',
            'config' => array(
                'type' => 'input',
                'size' => '75',
                'eval' => 'trim',
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'hidden;;1;;1-1-1, firstname,name,mfc_author_image,description,email,profil_link,xing,facebook,twitter')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);

$GLOBALS['TCA']['tx_mfcauthor_author']['ctrl']['searchFields'] = 'uid,firstname,name,description,email,profil_link,xing,facebook,twitter';

?>
