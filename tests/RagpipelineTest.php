<?php
/**
 * Tests for RAGPipeline
 */

use PHPUnit\Framework\TestCase;
use Ragpipeline\Ragpipeline;

class RagpipelineTest extends TestCase {
    private Ragpipeline $instance;

    protected function setUp(): void {
        $this->instance = new Ragpipeline(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ragpipeline::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
