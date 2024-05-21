<?php
/**
 * Patient Actor
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\LAP\Test\Actors\Applicant;

class Patient extends \OpenTHC\LAP\Test\Actors\Base
{
	/**
	 * @group Medical_Program
	 * As a Patient
	 * I need the ability to provide proof of guardianship (if court appointed) or power of attorney
	 * So the Guardian or POA can complete the registry ID card application requirements on the patient's behalf
	 */
	function testProofOfGuardianshipOrPowerOfAttorney () {}

	/**
	 * @group Medical_Program
	 * As a Patient
	 * I need the system to require an online attestation and signature
	 * So I can verify I am being seen by a qualified Psychotherapy provider and therefore meet the registry ID card application requirements
	 */
	function testPsychotherapyAttestationAndSignature () {}
}
