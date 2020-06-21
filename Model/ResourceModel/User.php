<?php
namespace Learning\Crud\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class User extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('learning_user','user_id');
    }
}
