<?php
namespace CB\Helloworld\Controller\Computer;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\ForwardFactory;

class ComputerDetail implements HttpGetActionInterface {

	private $pageFactory;
	private $resultForwardFactory;

	public function __construct(PageFactory $pageFactory, ForwardFactory $forwardFactory){
		$this->pageFactory =  $pageFactory;
		$this->forwardFactory = $forwardFactory;
	}

	public function execute(){
		/** @var Forword $forward */
		//$forward = $this->forwardFactory->create();
		//$forward->setController('computer')->forward('list');

		return $this->pageFactory->create();
	}

}