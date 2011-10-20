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
class Tx_GrbSweep_Domain_Model_Item extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * question
	 *
	 * @var string
	 */
	protected $question;

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
	 * isRequired
	 *
	 * @var boolean
	 */
	protected $isRequired;

	/**
	 * checkboxes
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Checkbox>
	 */
	protected $checkboxes;

	/**
	 * radiobuttons
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Radiobutton>
	 */
	protected $radiobuttons;

	/**
	 * text
	 *
	 * @var Tx_GrbSweep_Domain_Model_Text
	 */
	protected $text;

	/**
	 * textarea
	 *
	 * @var Tx_GrbSweep_Domain_Model_Textarea
	 */
	protected $textarea;

	/**
	 * fileupload
	 *
	 * @var Tx_GrbSweep_Domain_Model_Fileupload
	 */
	protected $fileupload;

	/**
	 * question
	 *
	 * @var string
	 */
	protected $question;
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
	 * isRequired
	 *
	 * @var boolean
	 */
	protected $isRequired;
	/**
	 * checkboxes
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Checkbox>
	 */
	protected $checkboxes;
	/**
	 * radiobuttons
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Radiobutton>
	 */
	protected $radiobuttons;
	/**
	 * text
	 *
	 * @var Tx_GrbSweep_Domain_Model_Text
	 */
	protected $text;
	/**
	 * textarea
	 *
	 * @var Tx_GrbSweep_Domain_Model_Textarea
	 */
	protected $textarea;
	/**
	 * fileupload
	 *
	 * @var Tx_GrbSweep_Domain_Model_Fileupload
	 */
	protected $fileupload;
	
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
		$this->checkboxes = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->radiobuttons = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the question
	 *
	 * @return string $question
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * Sets the question
	 *
	 * @param string $question
	 * @return void
	 */
	public function setQuestion($question) {
		$this->question = $question;
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
	 * Returns the isRequired
	 *
	 * @return boolean $isRequired
	 */
	public function getIsRequired() {
		return $this->isRequired;
	}

	/**
	 * Sets the isRequired
	 *
	 * @param boolean $isRequired
	 * @return void
	 */
	public function setIsRequired($isRequired) {
		$this->isRequired = $isRequired;
	}

	/**
	 * Returns the boolean state of isRequired
	 *
	 * @return boolean
	 */
	public function isIsRequired() {
		return $this->getIsRequired();
	}

	/**
	 * Adds a Checkbox
	 *
	 * @param Tx_GrbSweep_Domain_Model_Checkbox $checkbox
	 * @return void
	 */
	public function addCheckbox(Tx_GrbSweep_Domain_Model_Checkbox $checkbox) {
		$this->checkboxes->attach($checkbox);
	}

	/**
	 * Removes a Checkbox
	 *
	 * @param Tx_GrbSweep_Domain_Model_Checkbox $checkboxToRemove The Checkbox to be removed
	 * @return void
	 */
	public function removeCheckbox(Tx_GrbSweep_Domain_Model_Checkbox $checkboxToRemove) {
		$this->checkboxes->detach($checkboxToRemove);
	}

	/**
	 * Returns the checkboxes
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Checkbox> $checkboxes
	 */
	public function getCheckboxes() {
		return $this->checkboxes;
	}

	/**
	 * Sets the checkboxes
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Checkbox> $checkboxes
	 * @return void
	 */
	public function setCheckboxes(Tx_Extbase_Persistence_ObjectStorage $checkboxes) {
		$this->checkboxes = $checkboxes;
	}

	/**
	 * Adds a Radiobutton
	 *
	 * @param Tx_GrbSweep_Domain_Model_Radiobutton $radiobutton
	 * @return void
	 */
	public function addRadiobutton(Tx_GrbSweep_Domain_Model_Radiobutton $radiobutton) {
		$this->radiobuttons->attach($radiobutton);
	}

	/**
	 * Removes a Radiobutton
	 *
	 * @param Tx_GrbSweep_Domain_Model_Radiobutton $radiobuttonToRemove The Radiobutton to be removed
	 * @return void
	 */
	public function removeRadiobutton(Tx_GrbSweep_Domain_Model_Radiobutton $radiobuttonToRemove) {
		$this->radiobuttons->detach($radiobuttonToRemove);
	}

	/**
	 * Returns the radiobuttons
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Radiobutton> $radiobuttons
	 */
	public function getRadiobuttons() {
		return $this->radiobuttons;
	}

	/**
	 * Sets the radiobuttons
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbSweep_Domain_Model_Radiobutton> $radiobuttons
	 * @return void
	 */
	public function setRadiobuttons(Tx_Extbase_Persistence_ObjectStorage $radiobuttons) {
		$this->radiobuttons = $radiobuttons;
	}

	/**
	 * Returns the text
	 *
	 * @return Tx_GrbSweep_Domain_Model_Text $text
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Sets the text
	 *
	 * @param Tx_GrbSweep_Domain_Model_Text $text
	 * @return void
	 */
	public function setText(Tx_GrbSweep_Domain_Model_Text $text) {
		$this->text = $text;
	}

	/**
	 * Returns the textarea
	 *
	 * @return Tx_GrbSweep_Domain_Model_Textarea $textarea
	 */
	public function getTextarea() {
		return $this->textarea;
	}

	/**
	 * Sets the textarea
	 *
	 * @param Tx_GrbSweep_Domain_Model_Textarea $textarea
	 * @return void
	 */
	public function setTextarea(Tx_GrbSweep_Domain_Model_Textarea $textarea) {
		$this->textarea = $textarea;
	}

	/**
	 * Returns the fileupload
	 *
	 * @return Tx_GrbSweep_Domain_Model_Fileupload $fileupload
	 */
	public function getFileupload() {
		return $this->fileupload;
	}

	/**
	 * Sets the fileupload
	 *
	 * @param Tx_GrbSweep_Domain_Model_Fileupload $fileupload
	 * @return void
	 */
	public function setFileupload(Tx_GrbSweep_Domain_Model_Fileupload $fileupload) {
		$this->fileupload = $fileupload;
	}

}
?>