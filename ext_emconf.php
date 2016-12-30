<?php
/** @var string $_EXTKEY */

$EM_CONF[$_EXTKEY] = [
    'title' => 'WE Author',
    'description' => 'Gives you the possibility to add author informations into every page or tx_news entry',
    'category' => 'Web Essentials',
    'shy' => 0,
    'version' => '1.0.0',
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
    'author' => 'Lauri Saarni',
    'author_email' => 'lauri@web-essentials.asia',
    'author_company' => 'Web Essentials',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [
            'php' => '5.5.0-7.1.99',
            'typo3' => '6.2.0-7.6.99',
	        'autoloader' => '2.1.3'
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'news' => '3.0.1-3.9.99',
        ],
    ],
    '_md5_values_when_last_written' => '',
];
