<?php
namespace CB\Helloworld\Block\Computer;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use CB\Helloworld\Model\ResourceModel\Computers\CollectionFactory as ComputersCollectionFactory;
use CB\Helloworld\Api\ComputersRepositoryInterface;


class ComputetList extends Template 
{
	/**
	 * $computerCollectionFactory
	 * @var CB\Helloworld\Model\ResourceModel\Computers\CollectionFactory
	 */
	private $computersCollectionFactory;

	/**
	 * $computerRepository
	 * @var CB\Helloworld\Api\ComputersRepositoryInterface
	 */
	private $computerRepository;

	/**
	 * __construct 
	 * @param Context                    $context                   [description]
	 * @param ComputersCollectionFactory $computerCollectionFactory [description]
	 */
	public function __construct(Context $context, ComputersCollectionFactory $computersCollectionFactory, ComputersRepositoryInterface $computerRepository) {
		$this->computerRepository = $computerRepository;
		$this->computersCollectionFactory = $computersCollectionFactory;
		parent::__construct($context);
    }

    /**
     * getComputerList 
     * @return array
     */
    public function getComputerListCollection(){
    	/**
    	 * Loading data from repository
    	 */
    	return $this->computerRepository->getList();
    	
    	//return $this->computersCollectionFactory->create();
    }
}