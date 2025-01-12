<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusBlacklistPlugin\Factory;

use BitBag\SyliusBlacklistPlugin\Entity\FraudPrevention\FraudSuspicionInterface;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

interface FraudSuspicionFactoryInterface extends FactoryInterface
{
    public function createNew(): FraudSuspicionInterface;

    public function createForOrder(OrderInterface $order): FraudSuspicionInterface;

    public function createForAutomaticBlacklistingConfiguration(OrderInterface $order): FraudSuspicionInterface;
}

