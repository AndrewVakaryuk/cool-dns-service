<?php

namespace Andrii\CoolDnsService;
class CoolDNSService
{
    public function getDnsRecords(string $domain): array
    {
        $dnsRecords = dns_get_record($domain, DNS_ALL);

        if ($dnsRecords === false) {
            throw new \RuntimeException("Failed to get DNS records for domain: $domain");
        }

        $formattedRecords = [];

        foreach ($dnsRecords as $record) {
            $formattedRecords[] = [
                'type' => $record['type'],
                'name' => $record['host'],
                'ttl' => $record['ttl'],
                'data' => $record['ip'] ?? $record['txt'] ?? '',
            ];
        }

        return $formattedRecords;
    }
}