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
class Tx_GrbSweep_Domain_Model_Checkbox extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * possibility
	 *
	 * @var string
	 */
	protected $possibility;

	/**
	 * correct
	 *
	 * @var boolean
	 */
	protected $correct;

	/**
	 * value
	 *
	 * @var string
	 */
	protected $value;
	/**
	 * correctAnswer
	 *
	 * @var boolean
	 */
	protected $correctAnswer;
	/**
	 * answer
	 *
	 * @var string
	 */
	protected $answer;
	
	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the possibility
	 *
	 * @return string possibility
	 */
	public function getPossibility() {
		return $this->possibility;
	}

	/**
	 * Sets the possibility
	 *
	 * @param string $possibility
	 * @return string possibility
	 */
	public function setPossibility($possibility) {
		$this->possibility = $possibility;
	}

	/**
	 * Returns the correct
	 *
	 * @return boolean correct
	 */
	public function getCorrect() {
		return $this->correct;
	}

	/**
	 * Sets the correct
	 *
	 * @param boolean $correct
	 * @return boolean correct
	 */
	public function setCorrect($correct) {
		$this->correct = $correct;
	}

	/**
	 * Returns the boolean state of correct
	 *
	 * @return boolean correct
	 */
	public function isCorrect() {
		return $this->getCorrectAnswer();
	}

}
?>