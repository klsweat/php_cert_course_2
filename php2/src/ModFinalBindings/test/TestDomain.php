<?php
define('BASE', __DIR__ . '/../src/');
require BASE . 'Core/Service/Services.php';
require BASE . 'Core/Db/Db.php';
require BASE . 'Core/Db/AbstractModel.php';

class TestDomain extends PHPUnit_Framework_TestCase
{
    public function testDomainHasServices() {
        // Get the service instance
        $serviceLocator = Services::getInstance();

        // Make an instance of domain
        $domain = $serviceLocator->getDomain();

        // Ensure the services dependency is available
        $services = null;
        $services = $domain->getServices();
        $this->assertNotEmpty($services);
        $this->assertInstanceOf('Services', $services, 'Invalid instance');
    }
}