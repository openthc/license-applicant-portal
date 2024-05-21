<?php
/**
 * Base actor class for Selenium-based tests
 *
 * SPDX-License-Identifier: MIT
 */

namespace OpenTHC\LAP\Test\Actors;

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;

class Base extends \PHPUnit\Framework\TestCase
{
	protected static $wd;
	protected static $bs;

	public static function setUpBeforeClass() : void
	{
		parent::setUpBeforeClass();

		$caps = array(
			'browser' => 'Chrome',
			'browser_version' => 'latest',
			'build' => APP_BUILD,
			'os' => 'Windows',
			'os_version' => '10',
			'resolution' => '1366x768',
			// 'browserstack.debug' => true,
			'browserstack.console' => 'verbose',
		);

		$bs_uri = sprintf("https://%s:%s@%s/wd/hub", TEST_BROWSERSTACK_USER, TEST_BROWSERSTACK_AUTH, TEST_BROWSERSTACK_BASE);
		self::$wd = RemoteWebDriver::create($bs_uri, $caps);
		self::$wd->manage()->window()->maximize();
	}

	public static function tearDownAfterClass() : void
	{
		file_put_contents(sprintf('%s/webroot/test-output/last-screenshot.png', APP_ROOT), self::$wd->takeScreenshot());
		self::$wd->quit();
	}

	/**
		Load a Page
	*/
	public function getPage($u)
	{
		self::$wd->get($u);
	}

	/**
	 * Wrap WebDriver::getPageSource
	 */
	public function getPageSource()
	{
		return self::$wd->getPageSource();
	}

	/**
	 * Wrap WebDriver
	 */
	public function getPageTitle()
	{
		return self::$wd->getTitle();
	}

	/**
	 * Get an Element by Selector, does magic string promotion
	*/
	public function findElement($find)
	{
		if (is_object($find)) {
			// OK
		} elseif (is_string($find)) {
			if (preg_match('/^([\#\.])(.+)$/', $find, $m)) {
				switch ($m[1]) {
				case '#':
					$find = WebDriverBy::id($m[2]);
					break;
				case '.':
					$find = WebDriverBy::className($m[2]);
					break;
				}
			} elseif (preg_match('/^\/\/.+$/', $find)) {
				$find = WebDriverBy::xpath($find);
			} else {
				$find = WebDriverBy::cssSelector($find);
			}
		}

		$e = self::$wd->findElement($find);

		return $e;
	}

	/**
	 * Wrap WebDriver
	*/
	public function findElements($find)
	{
		return self::$wd->findElements($find);
	}

	/**
	 * @after
	 */
	public function afterTestTakeScreenshot()
	{

		$this->takeScreenshot($filename);
	}

	public function takeScreenshot($filename = null)
	{
		if (empty($filename)) {
			$class_name = get_class($this);
			$test_name = $this->getName();
			if (empty($class_name)) {
				$class_name = 'UnknownClass';
			}
			if (empty($test_name)) {
				$test_name = 'TestClass_' . uniqid();
			}
			$filename = sprintf("%s::%s", $class_name, $test_name);
		}
		$when = date('Y-z');

		$path = sprintf("%s/%s", APP_ROOT, "test/var/$when/");
		if (!is_dir($path)) {
			mkdir($path, 0755, true);
		}

		$filepath = sprintf("%s/%s", $path, "$filename.png");
		return self::$wd->takeScreenshot($filepath);
	}

}
