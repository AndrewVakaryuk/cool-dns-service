<?php

namespace Andrii\CoolDnsService\Tests;

use PHPUnit\Framework\TestCase;
use Andrii\CoolDnsService\CoolDNSService;

class CoolDNSServiceTest extends TestCase
{
    public function testGetDnsRecords(): void
    {
        $service = new CoolDNSService();
        $result = $service->getDnsRecords('google.com');

        $this->assertIsArray($result);
        $this->assertNotEmpty($result);

        foreach ($result as $record) {
            $this->assertArrayHasKey('type', $record);
            $this->assertArrayHasKey('name', $record);
            $this->assertArrayHasKey('ttl', $record);
            $this->assertArrayHasKey('data', $record);
        }
    }
}