<?php

namespace GeorgRinger\Newsadvancedsearch\Domain\Model;

class Type extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {


	/** @var string */
	protected $title;

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

}