<?php
/**
 * Healthcare Professional Actor
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\LAP\Test\Actors\Applicant;

class Healthcare extends \OpenTHC\LAP\Test\Actors\Base
{

	/**
	 * @group Medical_Program
	 * As a Healthcare Professional
	 * I need the ability to identify chronic conditions
	 * So I can validate my patient applying for the medical program (registry ID card) qualifies
	 */
	function testChronicConditions () {}

	/**
	 * @group Medical_Program
	 * As a Healthcare Professional
	 * I need the ability to attest to my good standing (in compliance with medical license requirements) from my state of initial licensure
	 * So I can validate my patient applying for the medical program (registry ID card)
	 */
	function testMedicalLicenseInGoodStandingAttestation () {}

	/**
	 * @group Medical_Program
	 * As a Healthcare Professional
	 * I need the ability to provide medical license information (such as: license #; issuing state; license category)
	 * So I can validate my patient applying for the medical program (registry ID card)
	 */
	function testMedicalLicenseInformation () {}

	/**
	 * @group Medical_Program
	 * As a Healthcare Professional
	 * I need the ability to identify diagnosis
	 * So I can validate my patient applying for the medical program (registry ID card) qualifies
	 */
	function testPatientDiagnosis () {}

	/**
	 * @group Medical_Program
	 * As a Healthcare Professional
	 * I need the ability to view a list of my patients approved for the medical program (registry ID card)
	 * So I can provide verification and approve renewal
	 */
	function testPatientListForValidationAndRenewalApproval () {}

	/**
	 * @group Medical_Program
	 * As a Healthcare Professional
	 * I need the ability to identify medical conditions
	 * So I can validate my patient applying for the medical program (registry ID card) qualifies
	 */
	function testPatientQualifyingMedicalConditions () {}
}
