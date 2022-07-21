<?php declare(strict_types=1);

namespace CB\Helloworld\Model;

use Magento\Framework\Model\AbstractModel;
use CB\Helloworld\Model\ResourceModel\Computers as ComputersResourceModel;
use CB\Helloworld\Api\Data\ComputersInterface;

class Computers extends AbstractModel implements ComputersInterface {
	protected function _construct(){
		$this->_init(ComputersResourceModel::class);
	}

	public function setCompany($company){
		return $this->setData(self::COMPANY, $company);
	}

	public function getCompany(){
		return $this->getData(self::COMPANY);
	}

	public function setHardDisk($hardDisk){
		return $this->setData(self::HARD_DISK, $hardDisk);
	}

	public function getHardDisk(){
		return $this->getData(self::HARD_DISK);
	}
}