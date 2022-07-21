<?php declare(strict_types=1);

namespace CB\Helloworld\Api\Data;


/**
 * Computers interface
 * @api
 * @since 1.0.0
 * 
 */

interface ComputersInterface {

	const COMPANY = "company";
	const HARD_DISK = "hard_disk";

	/**
	 * setCompany
	 * @param string $company
	 * @return void
	 * 
	 */
	public function setCompany($company);

	/**
	 * getCompany
	 * @return string
	 */
	public function getCompany();

	/**
	 * setHardDisk
	 * @param string $hardDisk
	 * @return void
	 */
	public function setHardDisk($hardDisk);

	/**
	 * getHardDisk
	 * @return string
	 * 
	 */
	public function getHardDisk();

}