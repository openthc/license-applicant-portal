<?php
/**
 * Legal Staff Actor
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\LAP\Test\USA_VT\Actors\CCB;

class Legal extends \OpenTHC\LAP\Test\USA_VT\Actors\Base
{
	/**
	 * @group Appeal
	 * As CCB Legal Staff
	 * I want the system to generate an appeal acknowledgement email and save it to the contact record
	 * So the applicant is notified their appeal has been received
	 */
	function testAppealAcknowledgementEmail() {}

	/**
	 * @group Appeal
	 * As CCB Legal Staff
	 * I need the system to retain all records associated to the appeal (such as: amendments; renewals; notes; uploads)
	 * So the licensee/applicant account contains all appeal data
	 */
	function testAppealGenerateRecord() {}

	/**
	 * @group Appeal
	 * As CCB Legal Staff
	 * I need to generate and/or modify an Appeal Motion Response via email and saved to the contact record
	 * So I can document a response to the applicant/attorney motion/brief"
	 */
	function testAppealResponseToMotionEmail() {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Legal Staff
	 * I need the ability to upload a settlement agreement
	 * So disciplinary action is documented on a case and compliance can be monitored
	 */
	function testCaseSettlementAgreementUpload() {}

	/**
	 * @group Complaint_Inspection
	 * As CCB Legal Staff
	 * I need the ability to add/edit/delete stipulations/conditions
	 * So case reflects the appropriate resolution/discipline
	 */
	function testCaseStipulationsAndConditions() {}
}
