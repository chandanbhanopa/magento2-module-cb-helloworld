<?php
namespace CB\Helloworld\Block\Computer;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use CB\Helloworld\Model\ResourceModel\Computers\CollectionFactory as ComputersCollectionFactory;


class ComputetList extends Template
{
	/**
	 * $computerCollectionFactory
	 * @var CB\Helloworld\Model\ResourceModel\Computers\CollectionFactory
	 */
	private $computersCollectionFactory;

	/**
	 * __construct 
	 * @param Context                    $context                   [description]
	 * @param ComputersCollectionFactory $computerCollectionFactory [description]
	 */
	public function __construct(Context $context, ComputersCollectionFactory $computersCollectionFactory) {
		$this->computersCollectionFactory = $computersCollectionFactory;
		parent::__construct($context);
    }

    /**
     * getComputerList 
     * @return array
     */
    public function getComputerListCollection(){
    	return $this->computersCollectionFactory->create();
    }
}