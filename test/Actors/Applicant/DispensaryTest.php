<?php
/**
 * Dispensary Personnel Actor
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\LAP\Test\Actors\Applicant;

class Dispensary extends \OpenTHC\LAP\Test\Actors\Base
{
	/**
	 * @group Medical_Program
	 * As Dispensary Personnel
	 * I need the ability to see specified patient record information
	 * So I can validate their ID card and that they meet the program requirements
	 */
	function testAccessToPatientRecords () {}

	/**
	 * @group Medical_Program
	 * As Dispensary Personnel
	 * I need the system to limit each transaction to one (1) ounce
	 * So I stay within statutory guidelines
	 */
	function testTransactionLimit () {}
}
