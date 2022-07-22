<?php declare(strict_types=1);

namespace CB\Helloworld\ViewModel;

use Magento\Framework\DataObject;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use CB\Helloworld\Api\ComputersRepositoryInterface;
use Magento\Framework\App\RequestInterface;

class Computers implements ArgumentInterface{

	private $computersRepository;
	private $request;
	public function __construct(ComputersRepositoryInterface $computersRepository, RequestInterface $request){
		$this->computersRepository = $computersRepository;
		$this->request = $request;
	}
	
	public function getComputersDetail(){
		$id = (int)$this->request->getParam('id');
		return $this->computersRepository->getById($id);
	}
}

