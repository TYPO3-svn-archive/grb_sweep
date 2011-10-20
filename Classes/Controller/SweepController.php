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
class Tx_GrbSweep_Controller_SweepController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * sweepRepository
	 *
	 * @var Tx_GrbSweep_Domain_Repository_SweepRepository
	 */
	protected $sweepRepository;

	/**
	 * sweepRepository
	 *
	 * @var Tx_GrbSweep_Domain_Repository_SweepRepository
	 */
	protected $sweepRepository;
	
	/**
	 * injectSweepRepository
	 *
	 * @param Tx_GrbSweep_Domain_Repository_SweepRepository $sweepRepository
	 * @return void
	 */
	public function injectSweepRepository(Tx_GrbSweep_Domain_Repository_SweepRepository $sweepRepository) {
		$this->sweepRepository = $sweepRepository;
	}

	/**
	 * action show
	 *
	 * @param $sweep
	 * @return void
	 */
	public function showAction(Tx_GrbSweep_Domain_Model_Sweep $sweep) {
		$this->view->assign('sweep', $sweep);
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$sweeps = $this->sweepRepository->findAll();
		$this->view->assign('sweeps', $sweeps);
	}

}
?>