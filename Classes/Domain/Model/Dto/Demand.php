<?php

/**
 * This file is part of the TYPO3 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License, either version 3
 * of the License, or (at your option) any later version.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace GeorgRinger\Newsadvancedsearch\Domain\Model\Dto;

/**
 * Class Demand
 *
 * @package GeorgRinger\Newsadvancedsearch\Domain\Model\Dto
 */
class Demand extends \Tx_News_Domain_Model_Dto_NewsDemand {


	/**
	 * @var array
	 */
	protected $locations = array();

	/**
	 * @var array
	 */
	protected $types = array();

	/**
	 * @var array
	 */
	protected $subject = array();

	/** @var string */
	protected $startdatum;

	/** @var string */
	protected $enddatum;

	/**
	 * @param array $locations
	 */
	public function setLocations($locations) {
		$this->locations = $locations;
	}

	/**
	 * @return array
	 */
	public function getLocations() {
		return $this->locations;
	}

	/**
	 * @param array $types
	 */
	public function setTypes($types) {
		$this->types = $types;
	}

	/**
	 * @return array
	 */
	public function getTypes() {
		return $this->types;
	}



	/**
	 * @param array $subject
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}

	/**
	 * @return array
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * @param string $enddatum
	 */
	public function setEnddatum($enddatum) {
		$this->enddatum = $enddatum;
	}

	/**
	 * @return string
	 */
	public function getEnddatum() {
		return $this->enddatum;
	}

	/**
	 * @param string $startdatum
	 */
	public function setStartdatum($startdatum) {
		$this->startdatum = $startdatum;
	}

	/**
	 * @return string
	 */
	public function getStartdatum() {
		return $this->startdatum;
	}







}