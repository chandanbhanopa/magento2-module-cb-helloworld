<?php declare(strict_types=1);

namespace CB\Helloworld\Model;

use Magento\Framework\Model\AbstractModel;
use CB\Helloworld\Api\Data\PostInterface;

class Post extends AbstractModel implements PostInterface {

	protected function _construct(){

		$this->_init(CB\Helloworld\Model\ResourceModel\Post::class);
		parent::_construct();

	}

	public function setId($id){
		return $this->setData(self::ID, $id);
	}

	public function getId(){
		return $this->getData(self::ID);
	}

	public function setTitle($title){
		return $this->setData(self::TITLE, $title);
	}

	public function getTitle(){
		return $this->getData(self::TITLE);
	}

	public function setContent($content){
		return $this->setData(self::CONTENT, $content);
	}

	public function getContent(){
		return $this->getData(self::CONTENT);
	}

	public function getCreatedAt(){
		return $this->getData(self::CREATED_AT);
	}
}
?>