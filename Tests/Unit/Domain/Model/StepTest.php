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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_GrbSweep_Domain_Model_Step.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Wettbewerb
 *
 * @author Juerg Langhard <langhard@greenbanana.ch>
 */
class Tx_GrbSweep_Domain_Model_StepTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_GrbSweep_Domain_Model_Step
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_GrbSweep_Domain_Model_Step();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() { 
		$this->fixture->setImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getItemsReturnsInitialValueForObjectStorageContainingTx_GrbSweep_Domain_Model_Item() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getItems()
		);
	}

	/**
	 * @test
	 */
	public function setItemsForObjectStorageContainingTx_GrbSweep_Domain_Model_ItemSetsItems() { 
		$item = new Tx_GrbSweep_Domain_Model_Item();
		$objectStorageHoldingExactlyOneItems = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneItems->attach($item);
		$this->fixture->setItems($objectStorageHoldingExactlyOneItems);

		$this->assertSame(
			$objectStorageHoldingExactlyOneItems,
			$this->fixture->getItems()
		);
	}
	
	/**
	 * @test
	 */
	public function addItemToObjectStorageHoldingItems() {
		$item = new Tx_GrbSweep_Domain_Model_Item();
		$objectStorageHoldingExactlyOneItem = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneItem->attach($item);
		$this->fixture->addItem($item);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneItem,
			$this->fixture->getItems()
		);
	}

	/**
	 * @test
	 */
	public function removeItemFromObjectStorageHoldingItems() {
		$item = new Tx_GrbSweep_Domain_Model_Item();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($item);
		$localObjectStorage->detach($item);
		$this->fixture->addItem($item);
		$this->fixture->removeItem($item);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getItems()
		);
	}
	
}
?>