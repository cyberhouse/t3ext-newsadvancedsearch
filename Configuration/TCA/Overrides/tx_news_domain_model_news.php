<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$columns = array(
	'locations' => array(
		'exclude' => 1,
		'label' => 'Locations',
		'config' => array(
			'type' => 'select',
			'size' => 5,
			'maxitems' => 20,
			'foreign_table' => 'tx_newsadvancedsearch_domain_model_location',
			'foreign_table_where' => 'ORDER BY tx_newsadvancedsearch_domain_model_location.title',
		),
	),
	'eventtypes' => array(
		'exclude' => 1,
		'label' => 'Event types',
		'config' => array(
			'type' => 'select',
			'size' => 5,
			'maxitems' => 20,
			'foreign_table' => 'tx_newsadvancedsearch_domain_model_type',
			'foreign_table_where' => 'ORDER BY tx_newsadvancedsearch_domain_model_type.title',
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $columns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'locations,eventtypes');