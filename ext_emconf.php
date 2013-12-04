<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mfc_author".
 *
 * Auto generated 04-12-2013 18:58
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
	'version' => '1.3.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'pages,tx_news_domain_model_news,tt_news',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Frank Kroeber, Simon Schmidt',
	'author_email' => 'typo3@marketing-factory.de',
	'author_company' => 'Marketing Factory Consulting GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-5.5.99',
			'typo3' => '4.5.1-4.5.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'news' => '2.1.0-2.9.99',
			'tt_news' => '3.3.0-3.9.99',
		),
	),
	'_md5_values_when_last_written' => 'a:24:{s:12:"ext_icon.gif";s:4:"3527";s:14:"ext_tables.php";s:4:"4e07";s:14:"ext_tables.sql";s:4:"bb3b";s:41:"Configuration/TCA/tx_mfcauthor_author.php";s:4:"4d85";s:38:"Configuration/TypoScript/constants.txt";s:4:"c803";s:34:"Configuration/TypoScript/setup.txt";s:4:"7a5b";s:24:"Documentation/Images.txt";s:4:"8410";s:26:"Documentation/Includes.txt";s:4:"bae2";s:23:"Documentation/Index.rst";s:4:"850d";s:26:"Documentation/Settings.yml";s:4:"755c";s:32:"Documentation/Backend/Images.txt";s:4:"9396";s:31:"Documentation/Backend/Index.rst";s:4:"1704";s:37:"Documentation/Configuration/Index.rst";s:4:"77f5";s:27:"Documentation/FAQ/Index.rst";s:4:"e497";s:35:"Documentation/Images/add_author.png";s:4:"f1de";s:39:"Documentation/Images/author_example.png";s:4:"10fd";s:43:"Documentation/Images/background_devider.gif";s:4:"94bd";s:35:"Documentation/Images/logo_typo3.png";s:4:"f048";s:38:"Documentation/Images/select_author.png";s:4:"5f51";s:37:"Documentation/Introduction/Images.txt";s:4:"77aa";s:36:"Documentation/Introduction/Index.rst";s:4:"4390";s:44:"Resources/Private/Language/locallang_tca.xml";s:4:"c76f";s:34:"Resources/Public/Icon/fe_users.gif";s:4:"d178";s:43:"Resources/Public/Stylesheets/mfc_author.css";s:4:"f55c";}',
	'suggests' => array(
	),
);

?>