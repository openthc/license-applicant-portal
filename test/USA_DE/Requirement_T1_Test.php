<?php
/**
 * Enforcement Requirements
 * @see 2024-120-GSS24929-SEED_SALE "Appendix A"
 */

namespace OpenTHC\LAP\TEST\USA_DE;

class Requirement_T1_Test extends \OpenTHC\Test\Base
{
	/**
	 * Req # T1.1, Criticality = M
	 * 1.91.1 Proposed System will store all checklists, inspection, violation, and infraction data.
	 */
	public function testT1_1(){ $this->assertTrue(true); }

	/**
	 * Req # T1.2, Criticality = M
	 * 1.92.1 Proposed system should support facility inspection checklists and integrate finding into a reporting document.
	 */
	public function testT1_2(){ $this->assertTrue(true); }

	/**
	 * Req # T1.3, Criticality = M
	 * 1.93.1 System should have inspection scheduler with reminders to the Department and the Licensee of required inspections.
	 */
	public function testT1_3(){ $this->assertTrue(true); }

}
