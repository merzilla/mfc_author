<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$tempColumns = Array(
	'tx_mfcauthor_author' => Array(
		'exclude' => 0,
		'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_author',
		'config' => Array(
			'type' => 'select',
			'items' => Array(
				Array("", 0),
			),
			'foreign_table' => 'tx_mfcauthor_author',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
		),
	),
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addFieldsToPalette('pages', 'metatags', '--linebreak--, tx_mfcauthor_author', '', 'after:description');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Author');


$GLOBALS['TCA']['tx_mfcauthor_author'] = array (
	'ctrl' => array (
		'title' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:tx_mfcauthor_author',
		'label' => 'name',
		'label_alt' => 'firstname',
		'label_alt_force' => 1,
		'crdate' => 'crdate',
		'tstamp' => 'tstamp',
		// 'hideTable' => '1',
		'default_sortby' => 'ORDER BY name',
		'iconfile' => t3lib_extMgm::extPath($_EXTKEY) . 'Resources/Public/Icon/fe_users.gif',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tx_mfcauthor_author.php'
	)
);


$tempColumns = Array (
	'tx_mfcauthor_author' => Array(
		'exclude' => 0,
		'label' => 'LLL:EXT:mfc_author/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcauthor_author',
		'config' => Array(
			'type' => 'select',
			'items' => Array(
				Array("", 0),
			),
			'foreign_table' => 'tx_mfcauthor_author',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
		),
	),
);

t3lib_div::loadTCA("tx_news_domain_model_news");
t3lib_extMgm::addTCAcolumns("tx_news_domain_model_news",$tempColumns,1);
t3lib_extMgm::addFieldsToPalette('tx_news_domain_model_news', 'paletteAuthor', '--linebreak--, tx_mfcauthor_author', '', 'after:author_email');

t3lib_div::loadTCA("tt_news");
t3lib_extMgm::addTCAcolumns("tt_news",$tempColumns,1);
t3lib_extMgm::addFieldsToPalette('tt_news', '3', '--linebreak--, tx_mfcauthor_author', '', 'after:author_email');
?>