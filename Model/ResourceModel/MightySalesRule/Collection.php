<?php

namespace Garbanzo\MightyDiscount\Model\ResourceModel\MightySalesRule;

use Garbanzo\MightyDiscount\Model\MightySalesRule;
use Garbanzo\MightyDiscount\Model\ResourceModel\MightySalesRule as MightySalesRuleResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(MightySalesRule::class, MightySalesRuleResourceModel::class);
    }
}
