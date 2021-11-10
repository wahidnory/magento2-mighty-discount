<?php

namespace Garbanzo\MightyDiscount\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class MightyCatalogRule extends AbstractDb
{
    const TABLE_NAME = 'catalogrule_mighty_rule';

    const PRIMARY_ID = 'mighty_id';
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::PRIMARY_ID);
    }
}
