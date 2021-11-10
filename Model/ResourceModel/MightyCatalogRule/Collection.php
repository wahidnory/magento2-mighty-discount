<?php

namespace Garbanzo\MightyDiscount\Model\ResourceModel\MightyCatalogRule;

use Garbanzo\MightyDiscount\Model\MightyCatalogRule;
use Garbanzo\MightyDiscount\Model\ResourceModel\MightyCatalogRule as MightyCatalogRuleResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(MightyCatalogRule::class, MightyCatalogRuleResourceModel::class);
    }
}
