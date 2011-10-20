<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Sweep',
	'Sweep'
);

//$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . sweep;
//$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .sweep. '.xml');





if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'tools',	 // Make module a submodule of 'tools'
		'manager',	// Submodule key
		'',						// Position
		array(
			'Sweep' => 'show, list',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_manager.xml',
		)
	);

}


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Wettbewerb');


t3lib_extMgm::addLLrefForTCAdescr('tx_grbsweep_domain_model_sweep', 'EXT:grb_sweep/Resources/Private/Language/locallang_csh_tx_grbsweep_domain_model_sweep.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbsweep_domain_model_sweep');
$TCA['tx_grbsweep_domain_model_sweep'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_sweep',
		'label' => 'sweep_start',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Sweep.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbsweep_domain_model_sweep.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbsweep_domain_model_feuser', 'EXT:grb_sweep/Resources/Private/Language/locallang_csh_tx_grbsweep_domain_model_feuser.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbsweep_domain_model_feuser');
$TCA['tx_grbsweep_domain_model_feuser'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_feuser',
		'label' => 'uid',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/FeUser.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbsweep_domain_model_feuser.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbsweep_domain_model_step', 'EXT:grb_sweep/Resources/Private/Language/locallang_csh_tx_grbsweep_domain_model_step.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbsweep_domain_model_step');
$TCA['tx_grbsweep_domain_model_step'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_step',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Step.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbsweep_domain_model_step.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbsweep_domain_model_item', 'EXT:grb_sweep/Resources/Private/Language/locallang_csh_tx_grbsweep_domain_model_item.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbsweep_domain_model_item');
$TCA['tx_grbsweep_domain_model_item'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_item',
		'label' => 'question',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Item.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbsweep_domain_model_item.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbsweep_domain_model_attendee', 'EXT:grb_sweep/Resources/Private/Language/locallang_csh_tx_grbsweep_domain_model_attendee.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbsweep_domain_model_attendee');
$TCA['tx_grbsweep_domain_model_attendee'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_attendee',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Attendee.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbsweep_domain_model_attendee.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbsweep_domain_model_checkbox', 'EXT:grb_sweep/Resources/Private/Language/locallang_csh_tx_grbsweep_domain_model_checkbox.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbsweep_domain_model_checkbox');
$TCA['tx_grbsweep_domain_model_checkbox'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_checkbox',
		'label' => 'possibility',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Checkbox.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbsweep_domain_model_checkbox.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbsweep_domain_model_radiobutton', 'EXT:grb_sweep/Resources/Private/Language/locallang_csh_tx_grbsweep_domain_model_radiobutton.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbsweep_domain_model_radiobutton');
$TCA['tx_grbsweep_domain_model_radiobutton'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_radiobutton',
		'label' => 'possibility',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Radiobutton.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbsweep_domain_model_radiobutton.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbsweep_domain_model_text', 'EXT:grb_sweep/Resources/Private/Language/locallang_csh_tx_grbsweep_domain_model_text.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbsweep_domain_model_text');
$TCA['tx_grbsweep_domain_model_text'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_text',
		'label' => 'answer',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Text.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbsweep_domain_model_text.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbsweep_domain_model_textarea', 'EXT:grb_sweep/Resources/Private/Language/locallang_csh_tx_grbsweep_domain_model_textarea.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbsweep_domain_model_textarea');
$TCA['tx_grbsweep_domain_model_textarea'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_textarea',
		'label' => 'answer',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Textarea.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbsweep_domain_model_textarea.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_grbsweep_domain_model_fileupload', 'EXT:grb_sweep/Resources/Private/Language/locallang_csh_tx_grbsweep_domain_model_fileupload.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_grbsweep_domain_model_fileupload');
$TCA['tx_grbsweep_domain_model_fileupload'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:grb_sweep/Resources/Private/Language/locallang_db.xml:tx_grbsweep_domain_model_fileupload',
		'label' => 'answer',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Fileupload.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_grbsweep_domain_model_fileupload.gif'
	),
);

?>