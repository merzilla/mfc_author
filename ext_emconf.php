<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mfc_author".
 *
 * Auto generated 29-11-2013 13:36
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Author',
	'description' => 'Gives you the possibility to add author informations into every page or tx_news entry',
	'category' => 'Marketing Factory',
	'shy' => 0,
	'version' => '2.0.1',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'pages,tx_news_domain_model_news',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Simon Schmidt',
	'author_email' => 'typo3@marketing-factory.de',
	'author_company' => 'Marketing Factory Consulting GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-5.5.99',
			'typo3' => '6.0.1-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'news' => '3.0.1-3.9.99',
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:12:"ext_icon.gif";s:4:"3527";s:14:"ext_tables.php";s:4:"257b";s:14:"ext_tables.sql";s:4:"b1f9";s:41:"Configuration/TCA/tx_mfcauthor_author.php";s:4:"4d85";s:38:"Configuration/TypoScript/constants.txt";s:4:"c803";s:34:"Configuration/TypoScript/setup.txt";s:4:"da2a";s:44:"Resources/Private/Language/locallang_tca.xml";s:4:"c76f";s:34:"Resources/Public/Icon/fe_users.gif";s:4:"d178";s:43:"Resources/Public/Stylesheets/mfc_author.css";s:4:"f55c";}',
	'suggests' => array(
	),
);

?>
