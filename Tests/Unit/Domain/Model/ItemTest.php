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
 * Test case for class Tx_GrbSweep_Domain_Model_Item.
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
class Tx_GrbSweep_Domain_Model_ItemTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_GrbSweep_Domain_Model_Item
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_GrbSweep_Domain_Model_Item();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getQuestionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setQuestionForStringSetsQuestion() { 
		$this->fixture->setQuestion('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getQuestion()
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
	public function getIsRequiredReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getIsRequired()
		);
	}

	/**
	 * @test
	 */
	public function setIsRequiredForBooleanSetsIsRequired() { 
		$this->fixture->setIsRequired(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getIsRequired()
		);
	}
	
	/**
	 * @test
	 */
	public function getCheckboxesReturnsInitialValueForObjectStorageContainingTx_GrbSweep_Domain_Model_Checkbox() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCheckboxes()
		);
	}

	/**
	 * @test
	 */
	public function setCheckboxesForObjectStorageContainingTx_GrbSweep_Domain_Model_CheckboxSetsCheckboxes() { 
		$checkbox = new Tx_GrbSweep_Domain_Model_Checkbox();
		$objectStorageHoldingExactlyOneCheckboxes = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCheckboxes->attach($checkbox);
		$this->fixture->setCheckboxes($objectStorageHoldingExactlyOneCheckboxes);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCheckboxes,
			$this->fixture->getCheckboxes()
		);
	}
	
	/**
	 * @test
	 */
	public function addCheckboxToObjectStorageHoldingCheckboxes() {
		$checkbox = new Tx_GrbSweep_Domain_Model_Checkbox();
		$objectStorageHoldingExactlyOneCheckbox = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCheckbox->attach($checkbox);
		$this->fixture->addCheckbox($checkbox);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCheckbox,
			$this->fixture->getCheckboxes()
		);
	}

	/**
	 * @test
	 */
	public function removeCheckboxFromObjectStorageHoldingCheckboxes() {
		$checkbox = new Tx_GrbSweep_Domain_Model_Checkbox();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($checkbox);
		$localObjectStorage->detach($checkbox);
		$this->fixture->addCheckbox($checkbox);
		$this->fixture->removeCheckbox($checkbox);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCheckboxes()
		);
	}
	
	/**
	 * @test
	 */
	public function getRadiobuttonsReturnsInitialValueForObjectStorageContainingTx_GrbSweep_Domain_Model_Radiobutton() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getRadiobuttons()
		);
	}

	/**
	 * @test
	 */
	public function setRadiobuttonsForObjectStorageContainingTx_GrbSweep_Domain_Model_RadiobuttonSetsRadiobuttons() { 
		$radiobutton = new Tx_GrbSweep_Domain_Model_Radiobutton();
		$objectStorageHoldingExactlyOneRadiobuttons = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneRadiobuttons->attach($radiobutton);
		$this->fixture->setRadiobuttons($objectStorageHoldingExactlyOneRadiobuttons);

		$this->assertSame(
			$objectStorageHoldingExactlyOneRadiobuttons,
			$this->fixture->getRadiobuttons()
		);
	}
	
	/**
	 * @test
	 */
	public function addRadiobuttonToObjectStorageHoldingRadiobuttons() {
		$radiobutton = new Tx_GrbSweep_Domain_Model_Radiobutton();
		$objectStorageHoldingExactlyOneRadiobutton = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneRadiobutton->attach($radiobutton);
		$this->fixture->addRadiobutton($radiobutton);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneRadiobutton,
			$this->fixture->getRadiobuttons()
		);
	}

	/**
	 * @test
	 */
	public function removeRadiobuttonFromObjectStorageHoldingRadiobuttons() {
		$radiobutton = new Tx_GrbSweep_Domain_Model_Radiobutton();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($radiobutton);
		$localObjectStorage->detach($radiobutton);
		$this->fixture->addRadiobutton($radiobutton);
		$this->fixture->removeRadiobutton($radiobutton);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getRadiobuttons()
		);
	}
	
	/**
	 * @test
	 */
	public function getTextReturnsInitialValueForTx_GrbSweep_Domain_Model_Text() { }

	/**
	 * @test
	 */
	public function setTextForTx_GrbSweep_Domain_Model_TextSetsText() { }
	
	/**
	 * @test
	 */
	public function getTextareaReturnsInitialValueForTx_GrbSweep_Domain_Model_Textarea() { }

	/**
	 * @test
	 */
	public function setTextareaForTx_GrbSweep_Domain_Model_TextareaSetsTextarea() { }
	
	/**
	 * @test
	 */
	public function getFileuploadReturnsInitialValueForTx_GrbSweep_Domain_Model_Fileupload() { }

	/**
	 * @test
	 */
	public function setFileuploadForTx_GrbSweep_Domain_Model_FileuploadSetsFileupload() { }
	
}
?>