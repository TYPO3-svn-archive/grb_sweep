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
class Tx_GrbSweep_Domain_Model_Sweep extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * sweepStart
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $sweepStart;

	/**
	 * sweepEnd
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $sweepEnd;

	/**
	 * maxAttendeesPerFeUser
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $maxAttendeesPerFeUser;

	/**
	 * steps
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Step>
	 */
	protected $steps;

	/**
	 * attendees
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Attendee>
	 */
	protected $attendees;

	/**
	 * sweepStart
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $sweepStart;
	/**
	 * sweepEnd
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $sweepEnd;
	/**
	 * maxAttendeesPerFeUser
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $maxAttendeesPerFeUser;
	/**
	 * steps
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Step>
	 */
	protected $steps;
	/**
	 * attendees
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Attendee>
	 */
	protected $attendees;
	
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
		$this->steps = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->attendees = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the sweepStart
	 *
	 * @return DateTime $sweepStart
	 */
	public function getSweepStart() {
		return $this->sweepStart;
	}

	/**
	 * Sets the sweepStart
	 *
	 * @param DateTime $sweepStart
	 * @return void
	 */
	public function setSweepStart($sweepStart) {
		$this->sweepStart = $sweepStart;
	}

	/**
	 * Returns the sweepEnd
	 *
	 * @return DateTime $sweepEnd
	 */
	public function getSweepEnd() {
		return $this->sweepEnd;
	}

	/**
	 * Sets the sweepEnd
	 *
	 * @param DateTime $sweepEnd
	 * @return void
	 */
	public function setSweepEnd($sweepEnd) {
		$this->sweepEnd = $sweepEnd;
	}

	/**
	 * Returns the maxAttendeesPerFeUser
	 *
	 * @return integer $maxAttendeesPerFeUser
	 */
	public function getMaxAttendeesPerFeUser() {
		return $this->maxAttendeesPerFeUser;
	}

	/**
	 * Sets the maxAttendeesPerFeUser
	 *
	 * @param integer $maxAttendeesPerFeUser
	 * @return void
	 */
	public function setMaxAttendeesPerFeUser($maxAttendeesPerFeUser) {
		$this->maxAttendeesPerFeUser = $maxAttendeesPerFeUser;
	}

	/**
	 * Adds a Step
	 *
	 * @param Tx_GrbSweep_Domain_Model_Step $step
	 * @return void
	 */
	public function addStep(Tx_GrbSweep_Domain_Model_Step $step) {
		$this->steps->attach($step);
	}

	/**
	 * Removes a Step
	 *
	 * @param Tx_GrbSweep_Domain_Model_Step $stepToRemove The Step to be removed
	 * @return void
	 */
	public function removeStep(Tx_GrbSweep_Domain_Model_Step $stepToRemove) {
		$this->steps->detach($stepToRemove);
	}

	/**
	 * Returns the steps
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Step> $steps
	 */
	public function getSteps() {
		return $this->steps;
	}

	/**
	 * Sets the steps
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Step> $steps
	 * @return void
	 */
	public function setSteps(Tx_Extbase_Persistence_ObjectStorage $steps) {
		$this->steps = $steps;
	}

	/**
	 * Adds a Attendee
	 *
	 * @param Tx_GrbSweep_Domain_Model_Attendee $attendee
	 * @return void
	 */
	public function addAttendee(Tx_GrbSweep_Domain_Model_Attendee $attendee) {
		$this->attendees->attach($attendee);
	}

	/**
	 * Removes a Attendee
	 *
	 * @param Tx_GrbSweep_Domain_Model_Attendee $attendeeToRemove The Attendee to be removed
	 * @return void
	 */
	public function removeAttendee(Tx_GrbSweep_Domain_Model_Attendee $attendeeToRemove) {
		$this->attendees->detach($attendeeToRemove);
	}

	/**
	 * Returns the attendees
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Attendee> $attendees
	 */
	public function getAttendees() {
		return $this->attendees;
	}

	/**
	 * Sets the attendees
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Attendee> $attendees
	 * @return void
	 */
	public function setAttendees(Tx_Extbase_Persistence_ObjectStorage $attendees) {
		$this->attendees = $attendees;
	}

}
?>