<?php
/**
 * Created by Joseph Daigle.
 * Date: 1/4/20
 * Time: 9:08 PM
 */

namespace LeadPail\PayPalBundle\Test;

use LeadPail\PayPalBundle\DependencyInjection\LeadPailPayPalBundleExtension;
use LeadPail\PayPalBundle\LeadPailPayPalBundle;
use PHPUnit\Framework\TestCase;

/**
 * BundleExtensionTest.
 *
 * @package LeadPail\PayPalBundle\Test
 */
class BundleExtensionTest extends TestCase
{
	/**
	 *
	 */
	public function testGetContainerExtension()
	{
		$bundle = new LeadPailPayPalBundle();
		$this->assertInstanceOf(LeadPailPayPalBundleExtension::class, $bundle->getContainerExtension());
	}
}