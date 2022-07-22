<?php
namespace CB\Helloworld\Controller\Computer;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;


class Edit implements HttpGetActionInterface {
	private $pageFactory;
	
	public function __construct(PageFactory $pageFactory){
		$this->pageFactory =  $pageFactory;
	}

	public function execute(){
		return $this->pageFactory->create();
	}
}