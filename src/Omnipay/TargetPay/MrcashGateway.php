<?php

/*
 * This file is part of the Omnipay package.
 *
 * (c) Adrian Macneil <adrian@adrianmacneil.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\TargetPay;

use Omnipay\TargetPay\Message\CompletePurchaseRequest;

/**
 * TargetPay MrCash gateway.
 *
 * @link https://www.targetpay.com/docs/TargetPay_MisterCash_V1.0_nl.pdf
 */
class MrcashGateway extends AbstractGateway
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'TargetPay MrCash';
    }

    /**
     * {@inheritdoc}
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\TargetPay\Message\MrcashPurchaseRequest', $parameters);
    }

    /**
     * Complete a purchase.
     *
     * @param array $parameters An array of options
     *
     * @return CompletePurchaseRequest
     */
    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\TargetPay\Message\MrcashCompletePurchaseRequest', $parameters);
    }
}
