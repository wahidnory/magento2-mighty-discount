<?php

namespace Garbanzo\MightyDiscount\Plugin;

use Garbanzo\MightyDiscount\Model\ResourceModel\MightySalesRule\Collection;
use Garbanzo\MightyDiscount\Model\ResourceModel\MightySalesRule\CollectionFactory;
use Magento\CatalogRule\Api\CatalogRuleRepositoryInterface;
use Magento\CatalogRule\Api\Data\RuleInterface;

class StoreTheMightyCatalogRule
{
    private CollectionFactory $mightySalesRuleCollectionFactory;

    public function __construct(
        CollectionFactory $mightySalesRuleCollectionFactory
    ) {

        $this->mightySalesRuleCollectionFactory = $mightySalesRuleCollectionFactory;
    }

    public function afterSave(
        CatalogRuleRepositoryInterface $subject,
        RuleInterface $result
    ) {

    }
}
