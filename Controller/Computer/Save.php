<?php
namespace CB\Helloworld\Controller\Computer;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\RedirectFactory;


class Save implements HttpPostActionInterface {

	/**
     * Request instance
     *
     * @var \Magento\Framework\App\RequestInterface
     */
    protected $request;

    /**
     * RedirectFactory instance
     *
     * @var \Magento\Framework\Controller\Result\RedirectFactory;
     */
    protected $redirectFactory;



	private $pageFactory;
	
	public function __construct(PageFactory $pageFactory, RequestInterface $request, RedirectFactory $redirectFactory){
		$this->pageFactory =  $pageFactory;
		$this->request = $request;
		$this->redirectFactory = $redirectFactory;
	}

	public function execute(){

		$post =  $this->request->isPost();
		if($post) {
			$postData = $this->request->getPostValue();
			$companyName = $postData['company'];
			$hardDisk = $postData['hard_disk'];
			$resultRedirect = $this->redirectFactory->create();
			$resultRedirect->setPath('helloworld/computer/add');
			return $resultRedirect;
		}

	}
}