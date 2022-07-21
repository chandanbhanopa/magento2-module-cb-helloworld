<?php declare(strict_types=1);

namespace CB\Helloworld\Api;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use CB\Helloworld\Api\Data\ComputersInterface;

/**
 * Computers crud interface
 * @api
 * @since 1.0.0
 * 
 */

interface ComputersRepositoryInterface {
	
	/**
	 * @param  ComputersInterface $computers
	 * @return CB\Helloworld\Api\Data\ComputersInterface
	 * @throws LocalizedException
	 */
	public function save(ComputersInterface $computers);

	/**
	 * getById
	 * @param  int $id
	 * @return ComputersInterface
	 */
	public function getById(int $id);

	/**
	 * deleteById
	 * @param  int $id
	 * @return bool
	 */
	public function deleteById(int $id);

}

