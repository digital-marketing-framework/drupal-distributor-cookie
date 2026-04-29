<?php

namespace Drupal\dmf_distributor_cookie\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\Cookie\DistributorCookieInitialization;
use Drupal\dmf_distributor_core\Registry\EventSubscriber\AbstractDistributorRegistryUpdateEventSubscriber;

class DistributorRegistryUpdateEventSubscriber extends AbstractDistributorRegistryUpdateEventSubscriber
{
    public function __construct()
    {
        parent::__construct(new DistributorCookieInitialization('dmf_distributor_cookie'));
    }
}
