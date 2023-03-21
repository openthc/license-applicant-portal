<?php
/**
 * Public Actor
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\VTCCB\Test\Actors;

class PublicTest extends \OpenTHC\VTCCB\Test\Actors\Base
{
	/**
	 * @group Public_Registry
	 * As a member of the Public
	 * I need the ability to see a catalogue of all products registered
	 * So I know what is available for purchase
	 */
	function testProductRegistration () {}


	/**
	 * @group Public_Registry
	 * As a member of the Public
	 * I want the ability to search for a license by type or name
	 * So I can see related license details and/or disciplinary status
	 */
	function testLicenseLookup () {}
}
