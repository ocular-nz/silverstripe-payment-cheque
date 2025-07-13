<?php

use Payment\PaymentFactory;
use SilverStripe\Dev\SapphireTest;

class ChequeTest extends SapphireTest
{

    function setUp(): void
    {
        parent::setUp();
    }

    public function testClassConfig()
    {
        $processor = PaymentFactory::factory('Cheque');
        $this->assertEquals(get_class($processor), 'ChequeProcessor');
        $this->assertEquals(get_class($processor->gateway), 'ChequeGateway');
        $this->assertEquals(get_class($processor->payment), 'Payment');
    }
}

