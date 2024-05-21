<?php
/**
 * Licensing Staff Actor
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\LAP\Test\Actors\CCB;

class Licensing extends \OpenTHC\LAP\Test\Actors\Base
{

	/**
	 * @group License_Application
	 * As CCB Licensing Staff, 
	 * I want the ability to connect a non-licensed contact to an application submission, in order to avoid duplicate records and allow the Licensee to complete the submission process
	 * So that data stays correct in the application"
	 */
	function testAssociateNonLicensedContactToApplication() {}

	/**
	 * @group License_Application
	 * As CCB Licensing Staff
	 * I need to generate and/or modify a Background Check Request email
	 * So the Licensee is notified of the process to obtain a background check by the 3rd party vendor and how the CCB is notified of the results
	 */
	function testBackgroundCheckRequestEmail() {}

	/**
	 * @group License_Application
	 * As CCB Licensing Staff
	 * I need the ability to capture background check results, so when notified of results by the 3rd party vendor, we can document on the Licensee account
	 * So that CCB policy is followed
	 */
	function testBackgroundCheckResults() {}

	/**
	 * @group License_Application
	 * As CCB Licensing Staff
	 * I want the ability to generate and/or modify a Social Equity Application Denial Letter to send via email and save to the contact record
	 * So the applicant is notified of their appeal rights
	 */
	function testSocialEquityApplicationDenialLetter() {}

	/**
	 * @group License_Application
	 * As CCB licensing staff
	 * I need the ability to create a new question for the offering content of a specific license type
	 * So I can easily pick which license types a question will show up on
	 */
	function testNewLicenseQuestionCreation() {}

	/**
	 * @group License_Application
	 * As CCB licensing staff
	 * I need the ability to approve an application with conditions
	 * So that I can track conditional approval and issue a license once conditions are met
	 */
	function testApproveWithConditions() {}

	/**
	 * @group License_Application
	 * As CCB licensing staff
	 * I need to be notified when uploads are made to an application after CCB requests them
	 * So that review can occur immediately
	 */
	function testNotificationsToStaff() {}

	/**
	 * @group License_Application
	 * As CCB licensing staff
	 * I need to ensure that applications in draft status are automatically inactivated after 12 months
	 * So I can verify no additional automated steps in the workflow are taken
	 */
	function testInactivateAfter12MonthsInDraft() {}

	/**
	 * @group License_Application
	 * As CCB Licensing Staff
	 * I need the ability to access an applicant's Dispensary application submission
	 * So I can review the requirements for completion
	 */
	function testDispensaryInitialApplicationReview() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I need the ability to document that I have validated the applicant has a valid Vermont Driver's License or Non-driver ID
	 * So I can verify Vermont residency
	 */
	function testDMVValidationOfVermontResidency() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I need the system to retain all documents associated to patient, caregiver
	 * So original application records are preserved
	 */
	function testDocumentRetention() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I need the ability to access an ID Card submission to review requirements
	 * So I can approve or deny the application
	 */
	function testIDCardApplicationApprovalOrDenial() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I need to ensure the system inactivates applications in draft status after 12 months
	 * So I can verify no additional automated steps in the workflow are taken
	 */
	function testIDCardApplicationDeactivation() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I need to be accountable for processing an application within 30 days of receipt
	 * So I am in compliance Title 18 Chapter 86 (requires applications be processed in 30 days)
	 */
	function testIDCardApplicationProcessing30dayRequirement() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I need the ability to request additional information from the ID Card applicant
	 * So they can provide the requirements necessary for application approval
	 */
	function testIDCardApplicationRequestForInformation() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I need to receive notification of an ID Card Application
	 * So I can begin review of the application requirements
	 */
	function testIDCardApplicationSubmissionNotification() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I need to generate and/or modify an ID Card Approval Letter to send via email and save to the contact record, 
	 * So the Licensee is notified their registry ID card application request has been approved
	 */
	function testIDCardApprovalLetter() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I want the ability to generate and/or modify a ID Card Denial Letter to send via email and save to the contact record
	 * So the applicant is notified of their appeal rights
	 */
	function testIDCardDenialLetter() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I need to generate an ID Card when the applicant has met the application requirements
	 * So they have a physical card that meets printing requirements to present at a dispensary
	 */
	function testIDCardPrinting() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I want the ability to generate and/or modify an ID Card Renewal Notification to send via email and save to the contact record
	 * So licensees can renew timely
	 */
	function testIDCardRenewalReminder() {}

	/**
	 * @group Medical_Program
	 * As CCB Licensing Staff
	 * I need the ability to assign a unique number to the ID Card for a Caregiver or Patient
	 * So the licensee can be distinctly identified
	 */
	function testIDCardUniqueNumber() {}

	/**
	 * @group License_Review
	 * As CCB licensing staff
	 * I need the payment receipt to reference the submission ID
	 * So I know what business IDs have paid
	 */
	function testPaymentReceiptTPENIC () {}

	/**
	 * @group License_Review
	 * As CCB licensing staff
	 * I need the ability to edit automated emails
	 * So that I can make any needed content changes to email and confirm what is being sent out
	 */
	function testEditAutomatedEmails () {}

	/**
	 * @group License_Maintenance
	 * As CCB licensing staff
	 * I need to ensure that a temporary ID card (employee or employer) expires after 4 months in incomplete/draft status
	 * So I can verify no additional automated steps in the workflow are taken
	 */
	function testEmployeeIDCardExpireAfter4MonthsInDraft () {}

	/**
	 * @group Advertising
	 * As CCB Licensing Staff
	 * I need the ability to review an advertising request
	 * So that I can ask for additional information, approve or deny the request
	 */
	function testRequestReview () {}
}
