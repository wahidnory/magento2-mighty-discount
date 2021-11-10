<?php

namespace Garbanzo\MightyDiscount\Api\Data;

interface MightySalesDiscountRule
{
    const MIGHTY_ID = 'mighty_id';
    const SALES_RULE_ID = 'salesrule_id';


    public function getMightyId(): int;
    public function setMightyId(int $id): MightySalesDiscountRule;

    public function getSalesRuleId(): int;
    public function setSalesRuleId(int $salesRuleId): MightySalesDiscountRule;
}
