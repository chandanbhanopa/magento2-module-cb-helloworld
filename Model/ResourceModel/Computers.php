<?php declare(strict_types=1);
namespace CB\Helloworld\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Computers extends AbstractDb {

	const ID_FIELD_NAME = "id";
	const MAIN_TABLE = "cb_computers";

	protected function _construct(){
		$this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
	}
}
