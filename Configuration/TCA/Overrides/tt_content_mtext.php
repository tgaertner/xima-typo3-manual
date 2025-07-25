<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:xima_typo3_manual/Resources/Private/Language/locallang.xlf:wizard.mtext.title',
        'mtext',
        'content-beside-text-img-below-center',
        'default',
        'LLL:EXT:xima_typo3_manual/Resources/Private/Language/locallang.xlf:wizard.mtext.description'
    ],
    'image',
    'after'
);
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['mtext'] = 'content-beside-text-img-below-center';

$GLOBALS['TCA']['tt_content']['palettes']['mtext'] = [
    'label' => 'LLL:EXT:xima_typo3_manual/Resources/Private/Language/locallang.xlf:mtext.palette',
    'showitem' => 'CType,--linebreak--,header,--linebreak--,bodytext,--linebreak--,assets,--linebreak--,imageorient',
];

$GLOBALS['TCA']['tt_content']['types']['mtext'] = [
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;mtext,
                --div--;LLL:EXT:xima_typo3_manual/Resources/Private/Language/locallang.xlf:tab.manual_relations,
                    --palette--;;manual-relations,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'xima_typo3_manual',
            ],
        ],
    ],
];
