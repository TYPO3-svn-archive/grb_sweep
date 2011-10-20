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
 * Test case for class Tx_GrbSweep_Domain_Model_Sweep.
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
class Tx_GrbSweep_Domain_Model_SweepTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_GrbSweep_Domain_Model_Sweep
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_GrbSweep_Domain_Model_Sweep();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getSweepStartReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setSweepStartForDateTimeSetsSweepStart() { }
	
	/**
	 * @test
	 */
	public function getSweepEndReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setSweepEndForDateTimeSetsSweepEnd() { }
	
	/**
	 * @test
	 */
	public function getMaxAttendeesPerFeUserReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMaxAttendeesPerFeUser()
		);
	}

	/**
	 * @test
	 */
	public function setMaxAttendeesPerFeUserForIntegerSetsMaxAttendeesPerFeUser() { 
		$this->fixture->setMaxAttendeesPerFeUser(12);

		$this->assertSame(
			12,
			$this->fixture->getMaxAttendeesPerFeUser()
		);
	}
	
	/**
	 * @test
	 */
	public function getStepsReturnsInitialValueForObjectStorageContainingTx_GrbSweep_Domain_Model_Step() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getSteps()
		);
	}

	/**
	 * @test
	 */
	public function setStepsForObjectStorageContainingTx_GrbSweep_Domain_Model_StepSetsSteps() { 
		$step = new Tx_GrbSweep_Domain_Model_Step();
		$objectStorageHoldingExactlyOneSteps = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneSteps->attach($step);
		$this->fixture->setSteps($objectStorageHoldingExactlyOneSteps);

		$this->assertSame(
			$objectStorageHoldingExactlyOneSteps,
			$this->fixture->getSteps()
		);
	}
	
	/**
	 * @test
	 */
	public function addStepToObjectStorageHoldingSteps() {
		$step = new Tx_GrbSweep_Domain_Model_Step();
		$objectStorageHoldingExactlyOneStep = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneStep->attach($step);
		$this->fixture->addStep($step);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneStep,
			$this->fixture->getSteps()
		);
	}

	/**
	 * @test
	 */
	public function removeStepFromObjectStorageHoldingSteps() {
		$step = new Tx_GrbSweep_Domain_Model_Step();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($step);
		$localObjectStorage->detach($step);
		$this->fixture->addStep($step);
		$this->fixture->removeStep($step);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getSteps()
		);
	}
	
	/**
	 * @test
	 */
	public function getAttendeesReturnsInitialValueForObjectStorageContainingTx_GrbSweep_Domain_Model_Attendee() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getAttendees()
		);
	}

	/**
	 * @test
	 */
	public function setAttendeesForObjectStorageContainingTx_GrbSweep_Domain_Model_AttendeeSetsAttendees() { 
		$attendee = new Tx_GrbSweep_Domain_Model_Attendee();
		$objectStorageHoldingExactlyOneAttendees = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneAttendees->attach($attendee);
		$this->fixture->setAttendees($objectStorageHoldingExactlyOneAttendees);

		$this->assertSame(
			$objectStorageHoldingExactlyOneAttendees,
			$this->fixture->getAttendees()
		);
	}
	
	/**
	 * @test
	 */
	public function addAttendeeToObjectStorageHoldingAttendees() {
		$attendee = new Tx_GrbSweep_Domain_Model_Attendee();
		$objectStorageHoldingExactlyOneAttendee = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneAttendee->attach($attendee);
		$this->fixture->addAttendee($attendee);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneAttendee,
			$this->fixture->getAttendees()
		);
	}

	/**
	 * @test
	 */
	public function removeAttendeeFromObjectStorageHoldingAttendees() {
		$attendee = new Tx_GrbSweep_Domain_Model_Attendee();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($attendee);
		$localObjectStorage->detach($attendee);
		$this->fixture->addAttendee($attendee);
		$this->fixture->removeAttendee($attendee);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getAttendees()
		);
	}
	
}
?>