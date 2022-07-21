<?php declare(strict_types=1);
namespace CB\Helloworld\Model\ResourceModel\Computers;

use CB\Helloworld\Model\Computers as ComputersModel;
use CB\Helloworld\Model\ResourceModel\Computers as ComputersResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {
	protected function _construct(){
		$this->_init(ComputersModel::class,ComputersResourceModel::class );
	}
}