<?php

namespace Garbanzo\MightyDiscount\Model;

use Garbanzo\MightyDiscount\Api\Data\MightySalesDiscountRule;
use Magento\Framework\Model\AbstractModel;

class MightySalesRule extends AbstractModel implements MightySalesDiscountRule
{
    /**
     * Init resource model and id field
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\MightySalesRule::class);
    }

    public function getMightyId(): int
    {
        return (int) $this->getData(self::MIGHTY_ID);
    }

    public function setMightyId(int $mightyId): MightySalesDiscountRule
    {
        return $this->setData(self::MIGHTY_ID, $mightyId);
    }

    public function getSalesRuleId(): int
    {
        return (int) $this->getData(self::SALES_RULE_ID);
    }

    public function setSalesRuleId(int $salesRuleId): MightySalesDiscountRule
    {
        return $this->setData(self::SALES_RULE_ID, $salesRuleId);
    }
}
