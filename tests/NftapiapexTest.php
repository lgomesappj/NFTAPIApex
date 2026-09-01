<?php
/**
 * Tests for NFTAPIApex
 */

use PHPUnit\Framework\TestCase;
use Nftapiapex\Nftapiapex;

class NftapiapexTest extends TestCase {
    private Nftapiapex $instance;

    protected function setUp(): void {
        $this->instance = new Nftapiapex(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftapiapex::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
