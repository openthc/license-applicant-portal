<?php
/**
 * All CCB Staff Actor
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\LAP\Test\Actors\CCB;

class Staff extends \OpenTHC\LAP\Test\Actors\Base
{

	/**
	 * @group Licensing
	 * As CCB Staff
	 * I need the ability to contact multiple contacts at the same time
	 * So I can send the same email to numerous contacts (individual, entity)
	 */
	function testLicensingMassEmail() {}

	/**
	 * @group Reporting
	 * As CCB Staff
	 * I want the ability to generate ad-hoc reporting
	 * So fields can be queried to produce as-needed reporting
	 */
	function testReportingAdHocReporting () {}

	/**
	 * @group Reporting
	 * As CCB Staff
	 * I need the ability to generate Case, Inspection and Appeal Reporting
	 * So I can monitor enforcement and appeal activities
	 */
	function testReportingEnforcementReporting () {}

	/**
	 * @group Reporting
	 * As CCB Staff
	 * I want the ability to export report data
	 * So I can access data in other formats (such as: Excel, Word, CVS)
	 */
	function testReportingExportCaseReportingData () {}

	/**
	 * @group Reporting
	 * As CCB Staff
	 * I need the ability to generate workload reports
	 * So I can monitor individual and division activity
	 */
	function testReportingWorkloadReports () {}

	/**
	 * @group Reporting
	 * As CCB Staff
	 * I need the ability to generate the Docket Report
	 * So we can provide oversight to board members and staff on items that require review, 
	 */
	function testReportingDocketReport () {}
}
