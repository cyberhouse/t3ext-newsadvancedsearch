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


/**
 * Hook for EXT:news
 */
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['Domain/Repository/AbstractDemandedRepository.php']['findDemanded'][$_EXTKEY]
	= 'EXT:' . $_EXTKEY . '/Classes/Hooks/Repository.php:GeorgRinger\\Newsadvancedsearch\\Hooks\\Repository->modify';
