<?php
namespace Learning\Crud\Model;

use Magento\Framework\Model\AbstractModel;

class User extends AbstractModel
{
     protected function _construct()
     {
         $this->_init(ResourceModel\User::class);
     }
}

