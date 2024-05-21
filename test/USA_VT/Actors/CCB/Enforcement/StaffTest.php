<?php
/**
 * Enforcement Staff Actor
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\LAP\Test\USA_VT\Actors\CCB\Enforcement;

class Staff extends \OpenTHC\LAP\Test\USA_VT\Actors\Base
{

	/**
	 * @group Hearing
	 * As CCB Enforcement Staff
	 * I need the ability to add hearing specific data fields (such as: status; case#; administrative law judge)
	 * So I can associate hearing related data points
	 */
	function testDetailedHearingInformation() {}

	/**
	 * @group Hearing
	 * As CCB Enforcement Staff
	 * I need the ability to track the workflow of a hearing
	 * So the status of the hearing can be monitored
	 */
	function testEventTrackingWorkflow() {}

	/**
	 * @group Hearing
	 * As CCB Enforcement Staff
	 * I need the ability to add/modify outcomes to a hearing 
	 * So that CCB decisions are documented and historical data retained
	 */
	function testHearingOutcomesAddModify() {}

	/**
	 * @group Hearing
	 * As CCB Enforcement Staff
	 * I need the ability to document the hearing request date
	 * So I can monitor and evaluate if the request was received timely (15 days)
	 */
	function testHearingRequestReceivedDate() {}

	/**
	 * @group Hearing
	 * As CCB Enforcement Staff
	 * I need the ability to document the pre-hearing conference date
	 * So we have a record of the request"
	 */
	function testPreHearingConference() {}

	/**
	 * @group Hearing
	 * As CCB Enforcement Staff
	 * I need the ability to track a hearing by a unique case number
	 * So progression of the hearing can be monitored
	 */
	function testUniqueCaseNumberForHearing() {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I want the ability to generate and/or modify an AOD (Assurance of Discontinuance)
	 * So the disciplinary agreement and fine assessed is attached to the case
	 */
	function testAODAssuranceOfDiscontinuance () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need to receive an email, notifying me a new case has been assigned to me
	 * So that I am aware of new cases
	 */
	function testCaseAssignmentEmail () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need a case to associate to a license record
	 * So all case data is associated and visible to Staff
	 */
	function testCaseAssociation () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need the ability to upload attachments to a case
	 * So all evidence collected is documented
	 */
	function testCaseAttachmentsUploads () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need to generate and/or modify a Case Closed email 
	 * So I can notify the Licensee and complainant (if identified) of the case resolution
	 */
	function testCaseClosedEmail () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need to identify a Case Closed Reason
	 * So I can specify the reason for closure and later report by closed reason
	 */
	function testCaseClosedReason () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need the ability to add/edit a case
	 * So I can enter a new complaint/inspection or edit an existing complaint/inspection
	 */
	function testCaseCreation () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need the ability to add/edit a case note
	 * So all case related information is documented and appropriate Staff are able to view
	 */
	function testCaseNotes () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need to generate and/or modify a Plan of Action
	 * So that alternative disciplinary action is documented on a case and compliance can be monitored
	 */
	function testCasePlanOfAction () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Staff
	 * I need the ability to take a physical or photo sample from a licensee and track progress associated with laboratory findings
	 * So that I can track report information
	 */
	function testCaseSampleTracking () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need a case to reflect current status
	 * So I can track the progression of a case
	 */
	function testCaseStatus () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I want the ability to add/edit a task with a due date to a case
	 * So I can follow-up in a specified timeframe
	 */
	function testCaseTaskAndDueDate () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need the ability to identify case by type and sub-type, 
	 * So I can differentiate cases between a compliant, inspection or appeal and further differentiate cases (such as: Routine Inspection; Inspection for Cause; Unlicensed; Law Enforcement; Educational; Advertising)
	 */
	function testCaseTypeAndSubType () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need the ability to send email (template) to a Licensee/Attorney/Complainant and automated email (template) to Enforcement Staff/Executive Director/General Counsel
	 * So they receive case status updates and current case communication
	 */
	function testCaseUpdateEmail () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need to add/edit a violation
	 * So the case accurately reflects the appropriate reference(s)
	 */
	function testCaseViolations () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need a specified case type to trigger a workflow
	 * So defined rules are automated (Such as: complainant, non-licensed, compliance, inspection and appeal)
	 */
	function testCaseWorkflowByCaseType () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I want the ability to generate and/or modify a CDO (Cease and Desist Order)
	 * So the disciplinary findings are attached to the case so specified actions are immediately stopped
	 */
	function testCDOCeaseAndDesistOrder () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I want the ability to send and track Certified Mail electronically
	 * So I can be assured correspondence delivery is tracked and associated to the case
	 */
	function testCertifiedMail () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need the ability to track and monitor case compliance
	 * So I can take required steps for non-compliance
	 */
	function testComplianceTracking () {}

	/**
	 * @group Complaint_Inspection
	 * As Enforcement Staff
	 * I need the ability to input the fines and penalties as determined by the hearing process
	 * So the system can calculate and display total amount due
	 */
	function testFinesAndPenalties () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need to view historical case data including correspondence
	 * So I can see prior investigation or inspection details and reference for future use
	 */
	function testHistoricalData () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I want the ability to generate and/or modify a Letter or Warning
	 * So the disciplinary findings are attached to the case
	 */
	function testLetterOfWarning () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need the ability to edit/modify a Licensee status
	 * So the status accurately reflects discipline, board decision or adjudication
	 */
	function testLicenseStatus () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I want the ability to restrict a Licensee from submitting a new license or renewal application if specific discipline or enforcement action has been taken
	 * So that the system follows CCB policy
	 */
	function testLicenseeRestrictions () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need the ability to create a Contact Record without a license
	 * So I can associate a case to a non-licensed contact
	 */
	function testNonLicensedContactRecord () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I want the ability to generate and/or modify an NOV (Notice of Violation)
	 * So the related parties are notified of the alleged violation (by category/rule) along with potential fine
	 */
	function testNOVNoticeOfViolation () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I require the ability to access case data when offline
	 * So I can review and enter data when at remote site locations
	 */
	function testOfflineAccessToCaseContent () {}

	/**
	 * @group Complaint_Inspection
	 * As Enforcement Staff
	 * I need the ability to add/modify a payment due date
	 * So the Licensee is held accountable for payment of fines and negotiated agreements are enforced
	 */
	function testPaymentDueDateAddModify () {}

	/**
	 * @group Complaint_Inspection
	 * As Enforcement Staff
	 * I need the system to flag a case when payment is past the due date
	 * So I can follow up with the Licensee or proceed with additional stipulations
	 */
	function testPaymentOutstandingOverdue () {}

	/**
	 * @group Complaint_Inspection
	 * As Enforcement Staff
	 * I need the ability to view all fines, penalties and payments by date
	 * So I can track current and historical financial records
	 */
	function testSearchByEntity () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I need the ability to search by Entity
	 * So I can associate the proper contact to a case
	 */
	function testUpdateOfflineCaseContent () {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Enforcement Staff
	 * I require the ability to sync data entered offline
	 * So all case and contact data is up to date
	 */
	function testPaymentSummary () {}

	/**
	 * @group Complaint_Inspection
	 * As Enforcement Staff
	 * I want the ability to track my case workload
	 * So that I can see the work I am assigned to
	 */
	function testWorkloadDashboard () {}

	/**
	 * @Workload_Management
	 * As CCB Enforcement Staff
	 * I want a dashboard of cases assigned to me
	 * So I can monitor progress via status
	 */
	function testCaseComplianceMonitoring() {}

	/**
	 * @Workload_Management
	 * As CCB Enforcement Staff
	 * I need the system to support mobile applications and offline capabilities for essential business process for field work
	 * So when back online the information is uploaded to the application and synced
	 */
	function testOfflineAccessAndSyncWhenReconnected() {}
}
