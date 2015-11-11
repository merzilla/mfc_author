<?php
/** @var string $_EXTKEY */

$EM_CONF[$_EXTKEY] = [
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
    'constraints' => [
        'depends' => [
            'php' => '5.5.0-5.6.99',
            'typo3' => '6.2.0-7.6.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'news' => '3.0.1-3.9.99',
        ],
    ],
    '_md5_values_when_last_written' => '',
];
