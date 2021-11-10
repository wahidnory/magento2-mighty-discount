<?php

namespace Garbanzo\MightyDiscount\Api;

interface MightyCatalogDiscountRule
{
    const MIGHTY_ID = 'mighty_id';
    const CATALOG_RULE_ID = 'catalogrule_id';

    public function getMightyId(): int;
    public function setMightyId(int $id): MightyCatalogDiscountRule;

    public function getCatalogRuleId(): int;
    public function setCatalogRuleId(int $catalogRuleId): MightyCatalogDiscountRule;
}
