<?php
/**
 * Medical Patient Registration Requirements
 * @see 2024-120-GSS24929-SEED_SALE "Appendix A"
 */

namespace OpenTHC\LAP\Test\USA_DE;

class Requirement_U1_Test extends \OpenTHC\Test\Base
{
	/**
	 * Req # U1.1, Criticality = M
	 * 1.94.1 System must collect and store all information required for a patient registry in accordance with Delaware’s Medical Marijuana Act. https://delcode.delaware.gov/title16/c049a/index.html
	 */
	public function testU1_1(){ $this->assertTrue(true); }

	/**
	 * Req # U1.2, Criticality = M
	 * 1.95.1 The scope of the system includes replacement of the identification card application process, from client submission through card printing. For example, the card includes an image of the card holder.
	 */
	public function testU1_2(){ $this->assertTrue(true); }
	
	/**
	 * Req # U1.3, Criticality = M
	 * 1.96.1	The solution will provide a user interface for entering application and applicant data, for physician certification including uploading of medical records.
	 */
	public function testU1_3(){ $this->assertTrue(true); }

	/**
	 * Req # U1.4, Criticality = M
	 * 1.97.1 The solution will provide a user interface for state approvers to review applications online.
	 */
	public function testU1_4(){ $this->assertTrue(true); }

	/**
	 * Req # U1.5, Criticality = M
	 * 1.98.1 System must support the patient, caregiver, pediatric, employee application process. The system must maintain a card holder registry for multiple types of cards, with historical data on each record.  Each type of card must be printed on a tamper resistant card with photo, card holder information, barcoding and limitations. Each card has a system assigned unique identifier.
	 */
	public function testU1_5(){ $this->assertTrue(true); }

	/**
	 * Req # U1.6, Criticality = M
	 * 1.99.1 The system must support medical marijuana cards that are confiscated, revoked, surrendered, or replaced.
	 */
	public function testU1_6(){ $this->assertTrue(true); }

	/**
	 * Req # U1.7, Criticality = M
	 * 1.100.1
	 * The ideal system would notify department, licensee and employee when an employee badge renewal is required and not allow employee with an expired badge to use the system.
	 */
	public function testU1_7(){ $this->assertTrue(true); }

	/**
	 * Req # U1.8, Criticality = M
	 * 1.101.1 The system should collect and store identification card payment information.
	 */
	public function testU1_8(){ $this->assertTrue(true); }

}

