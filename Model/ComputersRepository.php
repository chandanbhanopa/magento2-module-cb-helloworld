<?php declare(strict_types=1);

namespace CB\Helloworld\Model;
use CB\Helloworld\Api\ComputersRepositoryInterface;
use CB\Helloworld\Api\Data\ComputersInterface;

class ComputersRepository implements ComputersRepositoryInterface {
	/**
	 * save
	 * @param  ComputersInterface $computers
	 * @return ComputersInterface
	 */
	public function save(ComputersInterface $computers) {
		$computers->save();
		return $computers;
	}

	/**
	 * getById
	 * @param  int $id
	 * @return ComputersInterface
	 */
	public function getById($id) {

	}

	/**
	 * deleteById
	 * @param  int $id
	 * @return bool
	 */
	public function deleteById($id){

	}
}
