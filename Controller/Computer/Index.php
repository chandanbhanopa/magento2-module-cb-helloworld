<?php
namespace CB\Helloworld\Controller\Computer;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\RedirectFactory;


class Index implements HttpGetActionInterface {

	private $pageFactory;
	private $redirectFactory;

	public function __construct(PageFactory $pageFactory, RedirectFactory $redirectFactory){
		$this->pageFactory = $pageFactory;
		$this->redirectFactory = $redirectFactory;
	}
	public function execute(){
		//echo "Computer index page";
		//$redirect = $this->redirectFactory->create();
		//return $redirect->setPath('helloworld/computer/list');
		return $this->pageFactory->create();	
	}
}