<?php

namespace Tests\Leos\Infrastructure\WalletBundle\Doctrine\Types;

use Doctrine\DBAL\Types\Type;

/**
 * Class WalletItTypeTest
 *
 * @package Leos\Infrastructure\WalletBundle\Doctrine\Types
 */
class WalletItTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @group unit
     *
     * @throws \Doctrine\DBAL\DBALException
     */
    public function testType()
    {
        if (!Type::hasType('walletId')) { // Prevent error on cascade test execution

            Type::addType('walletId', 'Leos\Infrastructure\WalletBundle\Doctrine\Types\WalletIdType');
        }

        $type = Type::getType('walletId');

        self::assertEquals('walletId', $type->getName());
    }
}
