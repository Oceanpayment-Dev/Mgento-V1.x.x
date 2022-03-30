<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category	Oceanpayment
 * @package 	Oceanpayment_UnionPay
 * @copyright	Copyright (c) 2009 Oceanpayment,LLC. (http://www.oceanpayment.com)
 */
 
class Oceanpayment_OPUnionPay_Model_Source_Postfunction
{
    public function toOptionArray()
    {
        return array(
        	array('value' => 'socketPost', 'label' => Mage::helper('opunionpay')->__('socketPost')),
        	array('value' => 'Curl', 'label' => Mage::helper('opunionpay')->__('Curl')),
        );
    }
}



