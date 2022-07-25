<?php declare(strict_types=1);

namespace CB\Helloworld\Model;
use CB\Helloworld\Api\ComputersRepositoryInterface;
use CB\Helloworld\Api\Data\ComputersInterface;
use CB\Helloworld\Model\ComputersFactory;
use CB\Helloworld\Model\ResourceModel\Computers as ComputersResourceModel;
use CB\Helloworld\Model\ResourceModel\Computers\CollectionFactory as ComputersCollection;


class ComputersRepository implements ComputersRepositoryInterface {

	private $computersFactory;

	private $computerResourceModel;

	private $computerCollectionFactory;

	public function __construct(ComputersFactory $computersFactory, ComputersResourceModel $computerResourceModel, ComputersCollection $computerCollectionFactory){
		$this->computersFactory = $computersFactory;
		$this->computerResourceModel = $computerResourceModel;
		$this->computerCollectionFactory = $computerCollectionFactory;
	}

	/**
	 * save
	 * @param  ComputersInterface $computers
	 * @return CB\Helloworld\Api\Data\ComputersInterface
	 */
	public function save(ComputersInterface $computers) {
		$computers->save();
		return $computers;
	}

	/**
	 * getById
	 * @param  int $id
	 * @return CB\Helloworld\Api\Data\ComputersInterface
	 */
	public function getById($id) {
		$computer = $this->computersFactory->create();
		$this->computerResourceModel->load($computer, $id);
		if(!$computer->getId()){
			throw new NoSuchEntityException(__('The record with "%1" doesn\'t found', $id));
		}
		return $computer;

	}

	/**
	 * deleteById
	 * @param  int $id
	 * @return bool
	 */
	public function deleteById($id){
		$computer = $this->computersFactory->create();
		$this->computerResourceModel->load($computer, $id);
		if(!$computer->getId()){
			throw new NoSuchEntityException(__('The record %1 doesn\'t not exist', $id));
		}
		$this->computerResourceModel->delete($computer);

	}

	/**
	 * getList
	 * @return CB\Helloworld\Api\Data\ComputersInterface[]
	 */
	public function getList(){
		return $this->computerCollectionFactory->create()->getItems(); 
		
	}
}
