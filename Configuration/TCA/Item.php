<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_grbsweep_domain_model_item'] = array(
	'ctrl' => $TCA['tx_grbsweep_domain_model_item']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, question, description, image, is_required, checkboxes, radiobuttons, text, textarea, fileupload',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, question, description, image, is_required, checkboxes, radiobuttons, text, textarea, fileupload,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_grbsweep_domain_model_item',
				'foreign_table_where' => 'AND tx_grbsweep_domain_model_item.pid=###CURRENT_PID### AND tx_grbsweep_domain_model_item.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'question' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_item.question',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_item.description',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'image' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_item.image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_grbsweep',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'is_required' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_item.is_required',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'checkboxes' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_item.checkboxes',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_grbsweep_domain_model_checkbox',
				'foreign_field' => 'item',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'radiobuttons' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_item.radiobuttons',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_grbsweep_domain_model_radiobutton',
				'foreign_field' => 'item',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'text' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_item.text',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_grbsweep_domain_model_text',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'textarea' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_item.textarea',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_grbsweep_domain_model_textarea',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'fileupload' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_item.fileupload',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_grbsweep_domain_model_fileupload',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'step' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);
?>