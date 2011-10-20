<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_grbsweep_domain_model_sweep'] = array(
	'ctrl' => $TCA['tx_grbsweep_domain_model_sweep']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, sweep_start, sweep_end, max_attendees_per_fe_user, steps, attendees',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, sweep_start, sweep_end, max_attendees_per_fe_user, steps, attendees,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_grbsweep_domain_model_sweep',
				'foreign_table_where' => 'AND tx_grbsweep_domain_model_sweep.pid=###CURRENT_PID### AND tx_grbsweep_domain_model_sweep.sys_language_uid IN (-1,0)',
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
		'sweep_start' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_sweep.sweep_start',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'sweep_end' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_sweep.sweep_end',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'max_attendees_per_fe_user' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_sweep.max_attendees_per_fe_user',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'steps' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_sweep.steps',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_grbsweep_domain_model_step',
				'foreign_field' => 'sweep',
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
		'attendees' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_sweep.attendees',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_grbsweep_domain_model_attendee',
				'foreign_field' => 'sweep',
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
	),
);
?>