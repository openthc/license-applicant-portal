<?php
/**
 * Licensee Actor
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\LAP\Test\USA_VT\Actors\Applicant;

class Licensee extends \OpenTHC\LAP\Test\USA_VT\Actors\Base
{

	/**
	 * @group Complaint_Inspection
	 * As a Licensee
	 * I need the ability to upload required case reports
	 * So I remain in compliance with my case stipulations/conditions
	 */
	function testComplianceReportsUploaded () {}

	/**
	 * @group Complaint_Inspection
	 * As a Licensee
	 * I need the ability to make a payment online
	 * So any disciplinary fines can be paid electronically and the amount due is reduced by the amount of the payment
	 */
	function testPaymentForFinesElectronically () {}

	/**
	 * @group Complaint_Inspection
	 * As a Licensee
	 * I need the ability to make a payment via check
	 * So any disciplinary fines can be paid and the amount due is reduced by the amount of the payment
	 */
	function testPaymentForFinesPaper () {}

	/**
	 * @group Complaint_Inspection
	 * As a Licensee
	 * I want the ability to enroll in a payment plan
	 * So I can make payments towards my case fines and remain in compliance
	 */
	function testPaymentPlan () {}

	/**
	 * @group Complaint_Inspection
	 * As Enforcement Staff
	 * I need the ability to identify the type of fine
	 * So I can indicate if a fine is imposed or suspended
	 */
	function testTypeOfFine () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver, Healthcare Professional or Patient
	 * I need the system to require an online attestation and signature
	 * So I can verify the validity of my registry ID card application or validation of patient information is accurate and true
	 */
	function testAttestationAndSignature () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver or Patient
	 * I must complete a Background Check as part of my medical registry ID card application
	 * So CCB receives results from VCIC
	 */
	function testBackgroundCheck () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver, Healthcare Professional or Patient
	 * I need the ability to provide specified demographic information
	 * So my registry ID card application is complete
	 */
	function testDemographicInformation () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver or Patient 
	 * I need the ability to initiate an registry ID Card application
	 * So I can submit all requirements to receive an ID card
	 */
	function testIDCardInitialApplication () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver or Patient
	 * I need the ability to request an appeal
	 * So I can dispute an application denial
	 */
	function testIDCardInitialApplicationAppealRequest () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver or Patient 
	 * I need to receive a payment receipt
	 * So I have proof of payment for my registry ID card application or renewal.
	 */
	function testIDCardPaymentReceipt () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver or Patient
	 * I need the ability to submit payment online
	 * So I can pay the $50 application fee for my registry ID card application or renewal
	 */
	function testIDCardPaymentSubmission () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver or Patient
	 * I need the ability to upload a digital, color photo of my head and shoulders
	 * So I meet the registry ID card application requirement
	 */
	function testIDCardPhotoRequirement () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver or Patient
	 * I need the ability to renew my registry ID card
	 * So I remain in compliance with the medical program
	 */
	function testIDCardRenewalApplication () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver, Healthcare Provider or Patient
	 * I need the ability to modify/edit my application
	 * So I can provide additional information requested by VCCB Staff
	 */
	function testIDCardRequestForInformationResponse () {}

	/**
	 * @group Medical_Program
	 * As a Caregiver or Patient
	 * I need to be prompted for a question regarding release of my address to a dispensary
	 * So I can approve/deny delivery on behalf of my patient
	 */
	function testProvideAddressToDispensaryForDelivery () {}
}
