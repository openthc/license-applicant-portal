<?php
/**
 * Applicant/Licensee Actor
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\VTCCB\Test\Actors\Applicant;

class ApplicantTest extends \OpenTHC\VTCCB\Test\Actors\Base
{

	/**
	 * @group Appeal
	 * As an Applicant or Licensee
	 * I need the ability to submit an appeal
	 * So that I can formally disagree with the CCB's application or SE status decision and follow the appeal process
	 */
	function testFileAppeal() {}

	/**
	 * @group Hearing
	 * As an Applicant or Licensee
	 * I need the system to send an email, notifying me of the time and date specific to any actions related to my licensing or enforcement hearing
	 * So that I can comply with CCB policy
	 */
	function testNotifications () {}

	/**
	 * @group Hearing
	 * As an Applicant/Licensee
	 * I want the ability to request a hearing
	 * So I can dispute a CCB licensing decision or enforcement matter
	 */
	function testHearingRequest () {}

	/**
	 * @group Employee_ID_Card_Application
	 * As an Applicant or Licensee
	 * I need the ability to upload VT and Federal Background check to my application
	 * So I meet all licensing requirements.
	 */
	function testBackgroundCheckUploads () {}

	/**
	 * @group License_Application
	 * As an Applicant or Licensee
	 * I need the ability submit conditions to my applications once the Board has approved my application
	 * So I meet the requirements
	 */
	function testSubmitConditionsForApproval () {}

	/**
	 * @group License_Application
	 * As an Applicant or Licensee
	 * I need the ability to submit an initial application for a dispensary or submit a dispensary renewal application, 
	 * So I can meet all mandatory licensing requirements
	 */
	function testDispensaryInitialApplicationOrRenewal () {}

	/**
	 * @group License_Application
	 * As an applicant
	 * I need to see specific pages have been marked Incomplete or for Amendment in the application flow, 
	 * So that I know which pages to navigate to in order to update my information
	 */
	function testIncompleteAmendmentPages () {}


}
