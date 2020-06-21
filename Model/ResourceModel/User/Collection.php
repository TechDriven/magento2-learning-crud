<?php
namespace Learning\Crud\Model\ResourceModel\User;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Learning\Crud\Model\ResourceModel\User as UserResource;
use Learning\Crud\Model\User;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'user_id';

    protected function _construct()
    {
        $this->_init(
            User::class,
            UserResource::class
        );
    }
}
