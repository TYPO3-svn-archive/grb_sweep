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
class Tx_GrbSweep_Domain_Model_Attendee extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * preName
	 *
	 * @var string
	 */
	protected $preName;

	/**
	 * email
	 *
	 * @var string
	 */
	protected $email;

	/**
	 * feUser
	 *
	 * @var Tx_GrbSweep_Domain_Model_FeUser
	 */
	protected $feUser;

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name;
	/**
	 * preName
	 *
	 * @var string
	 */
	protected $preName;
	/**
	 * email
	 *
	 * @var string
	 */
	protected $email;
	/**
	 * feUser
	 *
	 * @var Tx_GrbSweep_Domain_Model_FeUser
	 */
	protected $feUser;
	
	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the preName
	 *
	 * @return string $preName
	 */
	public function getPreName() {
		return $this->preName;
	}

	/**
	 * Sets the preName
	 *
	 * @param string $preName
	 * @return void
	 */
	public function setPreName($preName) {
		$this->preName = $preName;
	}

	/**
	 * Returns the email
	 *
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the feUser
	 *
	 * @return Tx_GrbSweep_Domain_Model_FeUser $feUser
	 */
	public function getFeUser() {
		return $this->feUser;
	}

	/**
	 * Sets the feUser
	 *
	 * @param Tx_GrbSweep_Domain_Model_FeUser $feUser
	 * @return void
	 */
	public function setFeUser(Tx_GrbSweep_Domain_Model_FeUser $feUser) {
		$this->feUser = $feUser;
	}

}
?>