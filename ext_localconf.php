<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'GeorgRinger.' . $_EXTKEY,
	'Search',
	array(
		'Search' => 'form,result'
	),
	array(
		'Search' => 'form,result'
	)
);

