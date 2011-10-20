<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Sweep',
	array(
		'Sweep' => 'show, list',
		
	),
	// non-cacheable actions
	array(
		'Sweep' => '',
		
	)
);

?>