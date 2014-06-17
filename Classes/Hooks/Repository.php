<?php

namespace GeorgRinger\Newsadvancedsearch\Hooks;

use TYPO3\CMS\Core\Utility\GeneralUtility;

class Repository {

	public function modify(array $params, \Tx_News_Domain_Repository_NewsRepository $newsRepository) {
		if (get_class($params['demand']) !== 'GeorgRinger\\Newsadvancedsearch\\Domain\\Model\\Dto\\Demand') {
			return;
		}

		$this->updateConstraints($params['demand'], $params['respectEnableFields'], $params['query'], $params['constraints']);
	}

	/**
	 * @param \GeorgRinger\Newsadvancedsearch\Domain\Model\Dto\Demand $demand
	 * @param bool $respectEnableFields
	 * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
	 * @param array $constraints
	 */
	protected function updateConstraints(\GeorgRinger\Newsadvancedsearch\Domain\Model\Dto\Demand $demand, $respectEnableFields, \TYPO3\CMS\Extbase\Persistence\QueryInterface $query, array &$constraints) {

		$subject = $demand->getSubject();
		if (!empty($subject)) {
			$constraints[] = $query->like('title', '%' . $subject . '%');
		}

		$locations = $demand->getLocations();
		if (!empty($locations)) {
			$locationConstraints = array();

			foreach ($locations as $typeId) {
				$locationConstraints[] = $query->contains('locations', $typeId);
			}
			$constraints[] = $query->logicalOr($locationConstraints);
		}

		$types = $demand->getTypes();
		if (!empty($types)) {
			$typesConstraints = array();

			foreach ($types as $typeId) {
				$typesConstraints[] = $query->contains('eventtypes', $typeId);
			}
			$constraints[] = $query->logicalOr($typesConstraints);
		}

	}
}