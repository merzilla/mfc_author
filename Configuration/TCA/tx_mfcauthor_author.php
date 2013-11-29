<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TCA']['tx_mfcauthor_author'] = array (
	'ctrl' => $GLOBALS['TCA']['tx_mfcauthor_author']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'firstname,name,email,profil_link'
	),
	'feInterface' => $GLOBALS['TCA']['tx_mfcauthor_author']['feInterface'],
	'columns' => array (
		'firstname' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_firstname',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'eval' => 'trim',
			)
		),
		'name' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_name',
			'config' => array (
				'type' => 'input',
				'size' => '30',
				'eval' => 'trim',
			)
		),
		'email' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_email',
			'config' => array (
				'type' => 'input',
				'size' => '50',
				'eval' => 'trim',
			)
		),
		'profil_link' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_profil_link',
			'config' => array (
				'type' => 'input',
				'size' => '75',
				'eval' => 'trim',
			)
		),
		'mfc_author_image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_image',

			'config' => array(
				'form_type' => 'user',
				'userFunc' => 'EXT:dam/lib/class.tx_dam_tcefunc.php:&tx_dam_tceFunc->getSingleField_typeMedia',
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_dam',
				'prepend_tname' => 1,
				'foreign_table' => 'tx_dam',
				'MM' => 'tx_dam_mm_ref',
				'MM_opposite_field' => 'file_usage',
				'MM_match_fields' => array(
					'ident' => 'mfc_author_image'
				),
				'allowed_types' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size' => 1,
				'show_thumbs' => 1,
				'size' => 1,
				'maxitems' => 1,
				'minitems' => 0,
				'autoSizeMax' => 1,
			)
		),
		'description' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_description',
			'config' => array (
				'type' => 'text',
				'size' => '200',
				'eval' => 'trim',
			)
		),
		'xing' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_xing',
			'config' => array (
				'type' => 'input',
				'size' => '75',
				'eval' => 'trim',
			)
		),
		'facebook' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_facebook',
			'config' => array (
				'type' => 'input',
				'size' => '75',
				'eval' => 'trim',
			)
		),
		'twitter' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_twitter',
			'config' => array (
				'type' => 'input',
				'size' => '75',
				'eval' => 'trim',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, firstname,name,mfc_author_image,description,email,profil_link,xing,facebook,twitter')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);

?>