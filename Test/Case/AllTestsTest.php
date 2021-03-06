<?php
/**
 * AllTestsTest file.
 *
 * Bancha Project : Combining Ext JS and CakePHP (http://banchaproject.org)
 * Copyright 2011-2012 Roland Schuetz, Kung Wong, Andreas Kern, Florian Eckerstorfer
 *
 * @package       Bancha
 * @category      tests
 * @copyright     Copyright 2011-2012 Roland Schuetz, Kung Wong, Andreas Kern, Florian Eckerstorfer
 * @link          http://banchaproject.org Bancha Project
 * @since         Bancha v 0.9.0
 * @author        Florian Eckerstorfer <f.eckerstorfer@gmail.com>
 * @author        Andreas Kern <andreas.kern@gmail.com>
 * @author        Roland Schuetz <mail@rolandschuetz.at>
 * @author        Kung Wong <kung.wong@gmail.com>
 */

/**
 * AllTestsTest class
 *
 * This test group will run all test in the Bancha/Test/Cases directory except for those in the System directory.
 *
 * @package       Bancha
 * @category      tests
 */
class AllTestsTest extends PHPUnit_Framework_TestSuite {

/**
 * Suite define the tests for this suite
 *
 * @return void
 */
	public static function suite() {
		$suite = new CakeTestSuite('All Tests');

		$path = dirname(__FILE__) . DS;
		$suite->addTestFile($path . DS . 'AllBehaviorsTest.php');
		$suite->addTestFile($path . DS . 'AllControllerTest.php');
		$suite->addTestFile($path . DS . 'AllNetworkTest.php');
		$suite->addTestFile($path . DS . 'AllRoutingTest.php');
		$suite->addTestFile($path . DS . 'AllSystemTest.php');
		$suite->addTestFile($path . DS . 'BanchaApiTest.php');
		
		//$suite->addTestDirectory($path);
		return $suite;
	}
}
