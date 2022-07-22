<?php
namespace CB\Helloworld\Controller\Computer;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use CB\Helloworld\Model\ComputersFactory;
use CB\Helloworld\Api\ComputersRepositoryInterface;


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


    /**
     * ComputersFactory instance
     *
     * @var CB\Helloworld\Model\ComputersFactory
     */
    protected $computersFactory;

    /**
     * ComputersFactory instance
     *
     * @var CB\Helloworld\Api\ComputersRepositoryInterface
     */
    protected $computersRepository;

	private $pageFactory;
	
	public function __construct(PageFactory $pageFactory, RequestInterface $request, RedirectFactory $redirectFactory, ComputersFactory $computersFactory, ComputersRepositoryInterface $computersRepository){
		$this->pageFactory =  $pageFactory;
		$this->request = $request;
		$this->redirectFactory = $redirectFactory;
		$this->computersFactory = $computersFactory;
		$this->computersRepository = $computersRepository; 
	}

	public function execute(){
		$post =  $this->request->isPost();
       	if($post) {
			$postData = $this->request->getPostValue();
			$computers = $this->computersFactory->create();

			if(isset($postData['id'])){
				$computers = $computers->load($postData['id']);
			}
			$companyName = $postData['company'];
			$hardDisk = $postData['hard_disk'];
			
			$computers->setCompany($companyName);
			$computers->setHardDisk($hardDisk);
			try{
				$this->computersRepository->save($computers);
			} catch(Exception $e) {
				echo $e->getMessage();
				die();
			}
			
			$resultRedirect = $this->redirectFactory->create();
			$resultRedirect->setPath('helloworld/computer/list');
			return $resultRedirect;
		}

	}
}
