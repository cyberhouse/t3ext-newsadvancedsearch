<?php

namespace GeorgRinger\Newsadvancedsearch\Domain\Repository;

class TypeRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findAll() {
		$query = $this->createQuery();
		$query->getQuerySettings()->setRespectStoragePage(FALSE);

		return $query->execute();
	}

}