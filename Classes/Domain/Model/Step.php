<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Juerg Langhard <langhard@greenbanana.ch>, GreenBanana GmbH - Switzerland - www.greenbanana.ch
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package grb_sweep
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_GrbSweep_Domain_Model_Step extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * image
	 *
	 * @var string
	 */
	protected $image;

	/**
	 * items
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Item>
	 */
	protected $items;

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;
	/**
	 * image
	 *
	 * @var string
	 */
	protected $image;
	/**
	 * items
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Item>
	 */
	protected $items;
	
	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->items = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the image
	 *
	 * @return string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Adds a Item
	 *
	 * @param Tx_GrbSweep_Domain_Model_Item $item
	 * @return void
	 */
	public function addItem(Tx_GrbSweep_Domain_Model_Item $item) {
		$this->items->attach($item);
	}

	/**
	 * Removes a Item
	 *
	 * @param Tx_GrbSweep_Domain_Model_Item $itemToRemove The Item to be removed
	 * @return void
	 */
	public function removeItem(Tx_GrbSweep_Domain_Model_Item $itemToRemove) {
		$this->items->detach($itemToRemove);
	}

	/**
	 * Returns the items
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Item> $items
	 */
	public function getItems() {
		return $this->items;
	}

	/**
	 * Sets the items
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Item> $items
	 * @return void
	 */
	public function setItems(Tx_Extbase_Persistence_ObjectStorage $items) {
		$this->items = $items;
	}

}
?>