<?php

class Tx_Newsadvancedsearch_Domain_Model_News extends \Tx_News_Domain_Model_News {

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Newsadvancedsearch\Domain\Model\Location>
	 */
	protected $locations;

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Newsadvancedsearch\Domain\Model\Type>
	 */
	protected $eventtypes;

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getLocations() {
		return $this->locations;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $locations
	 */
	public function setLocations($locations) {
		$this->locations = $locations;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getEventtypes() {
		return $this->eventtypes;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $eventtypes
	 */
	public function setEventtypes($eventtypes) {
		$this->eventtypes = $eventtypes;
	}


}

?>