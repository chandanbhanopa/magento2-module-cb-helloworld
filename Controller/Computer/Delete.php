<?php
namespace CB\Helloworld\Controller\Computer;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use CB\Helloworld\Api\ComputersRepositoryInterface;
use Magento\Framework\Controller\Result\RedirectFactory;



class Delete implements HttpGetActionInterface {

	private $computerRepository;

	private $request;

	private $redirectFactory;
	
	public function __construct( RequestInterface $request, ComputersRepositoryInterface $computerRepository, RedirectFactory $redirectFactory){
		$this->request = $request;
		$this->computerRepository = $computerRepository;
		$this->redirectFactory = $redirectFactory;
	}

	public function execute(){

		$id = $this->request->getParam('id');
		$this->computerRepository->deleteById($id);
		$resultRedirect = $this->redirectFactory->create();
		$resultRedirect->setPath('helloworld/computer/list');
		return $resultRedirect;

		
	}
}