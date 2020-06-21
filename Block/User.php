<?php
namespace Learning\Crud\Block;

use Magento\Framework\View\Element\Template;
use Learning\Crud\Model\ResourceModel\User\CollectionFactory;

class User extends Template
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * User constructor.
     * @param Template\Context $context
     * @param CollectionFactory $collectionFactory
     * @param array $data
     */
    public function __construct(
         Template\Context $context,
         CollectionFactory $collectionFactory,
         array $data = []
    ) {
         parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return \Learning\Crud\Model\User[]
     */
    public function getUsers()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
