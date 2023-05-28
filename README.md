# CoolDNSService

This is a simple PHP library for the Laravel framework that fetches and formats all DNS records for a given domain.

## Installation

Add this to composer.json
```
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/AndrewVakaryuk/cool-dns-service.git"
        }
    ]
```

Use composer to install the package:
```
composer require andrii/cool-dns-service
```

## Usage
Here's how you can use the CoolDNSService class to get DNS records:
```
use Andrii\CoolDnsService\CoolDNSService;

$coolDNSService = new CoolDNSService();
$result = $coolDNSService->getDnsRecords("gmail.com");

print_r($result);
```
This will print an array of DNS records, each of which is an associative array with 'type', 'name', 'ttl', and 'data' keys.

## Testing
You can run the tests for this package with PHPUnit:
```
./vendor/bin/phpunit vendor/andrii/cool-dns-service/tests
```

## License
This package is open-source software licensed under the MIT license.
