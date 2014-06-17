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
namespace GeorgRinger\Newsadvancedsearch\Controller;

/**
 * Class SearchController
 *
 * @package GeorgRinger\Newsadvancedsearch\Controller
 */
class SearchController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var \Tx_News_Domain_Repository_NewsRepository
	 */
	protected $newsRepository;

	/**
	 * @var \GeorgRinger\Newsadvancedsearch\Domain\Repository\TypeRepository
	 */
	protected $typeRepository;

	/**
	 * @var \GeorgRinger\Newsadvancedsearch\Domain\Repository\LocationRepository
	 */
	protected $locationRepository;

	/**
	 * @param \GeorgRinger\Newsadvancedsearch\Domain\Model\Dto\Search $search
	 */
	public function formAction(\GeorgRinger\Newsadvancedsearch\Domain\Model\Dto\Search $search = NULL) {
		if (is_null($search)) {
			$search = $this->objectManager->get('GeorgRinger\\Newsadvancedsearch\\Domain\\Model\\Dto\\Search');
		}

		$this->view->assignMultiple(array(
			'search' => $search,
			'locations' => $this->locationRepository->findAll(),
			'types' => $this->typeRepository->findAll()
		));
	}

	/**
	 * @param \GeorgRinger\Newsadvancedsearch\Domain\Model\Dto\Search $search
	 */
	public function resultAction(\GeorgRinger\Newsadvancedsearch\Domain\Model\Dto\Search $search = NULL) {
		if (is_null($search)) {
			$search = $this->objectManager->get('GeorgRinger\\Newsadvancedsearch\\Domain\\Model\\Dto\\Search');
		}

		/** @var \GeorgRinger\Newsadvancedsearch\Domain\Model\Dto\Demand $demand */
		$demand = $this->objectManager->get('GeorgRinger\\Newsadvancedsearch\\Domain\\Model\\Dto\\Demand');
		$demand->setLocations($search->getLocations());
		$demand->setTypes($search->getTypes());
		$demand->setSubject($search->getSubject());

		$newsItems = $this->newsRepository->findDemanded($demand);

		$this->view->assignMultiple(array(
			'search' => $search,
			'demand' => $demand,
			'news' => $newsItems
		));
	}

	/**
	 * @param \Tx_News_Domain_Repository_NewsRepository $newsRepository
	 */
	public function injectNewsRepository(\Tx_News_Domain_Repository_NewsRepository $newsRepository) {
		$this->newsRepository = $newsRepository;
	}

	/**
	 * @param \GeorgRinger\Newsadvancedsearch\Domain\Repository\TypeRepository $typeRepository
	 */
	public function injectTypeRepository(\GeorgRinger\Newsadvancedsearch\Domain\Repository\TypeRepository $typeRepository) {
		$this->typeRepository = $typeRepository;
	}

	/**
	 * @param \GeorgRinger\Newsadvancedsearch\Domain\Repository\LocationRepository $locationRepository
	 */
	public function injectLocationRepository(\GeorgRinger\Newsadvancedsearch\Domain\Repository\LocationRepository $locationRepository) {
		$this->locationRepository = $locationRepository;
	}

}