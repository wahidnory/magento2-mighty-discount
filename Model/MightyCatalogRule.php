<?php

namespace Garbanzo\MightyDiscount\Model;

use Garbanzo\MightyDiscount\Api\MightyCatalogDiscountRule;
use Magento\Framework\Model\AbstractModel;

class MightyCatalogRule extends AbstractModel implements MightyCatalogDiscountRule
{
    /**
     * Init resource model and id field
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\MightyCatalogRule::class);
    }

    public function getMightyId(): int
    {
        return (int) $this->getData(self::MIGHTY_ID);
    }

    public function setMightyId(int $mightyId): MightyCatalogDiscountRule
    {
        return $this->setData(self::MIGHTY_ID, $mightyId);
    }

    public function getCatalogRuleId(): int
    {
        return (int) $this->getData(self::CATALOG_RULE_ID);
    }

    public function setCatalogRuleId(int $catalogRuleId): MightyCatalogDiscountRule
    {
        return $this->setData(self::CATALOG_RULE_ID, $catalogRuleId);
    }


}
