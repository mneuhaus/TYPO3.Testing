<?php
declare(ENCODING = 'utf-8');
namespace TYPO3\Testing\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "Testing".                    *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License as published by the Free   *
 * Software Foundation, either version 3 of the License, or (at your      *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        *
 * You should have received a copy of the GNU General Public License      *
 * along with the script.                                                 *
 * If not, see http://www.gnu.org/licenses/gpl.html                       *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Controller for the test runner
 *
 * This is absolutely not programmed the way we want it later on, just preliminary!
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class StandardController extends \TYPO3\FLOW3\MVC\Controller\ActionController {
	/**
	 * Processes a (web-) request and returns the rendered page as a response
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->redirectToUri("/_Resources/Static/Packages/TYPO3.Testing/PHPUnitGui/");
	}
}

?>