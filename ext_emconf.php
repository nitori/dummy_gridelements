<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "gridelements".
 *
 * Auto generated 29-03-2018 12:21
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Dummy Grid Elements',
    'description' => 'Add as dummy to not lose information in colPos of tt_content table',
    'category' => 'be',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadfolder' => true,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Lars Peter Søndergaard',
    'author_email' => 'entwicklung@lichtflut-medien.de',
    'author_company' => 'Lichtflut.Medien GmbH & Co. KG',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-9.5.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
