<?php declare(strict_types=1);
namespace CB\Helloworld\Model\ResourceModel\Post;

use CB\Helloworld\Model\Post as PostModel;
use CB\Helloworld\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {
	protected function _construct(){
		$this->init(PostModel::class,PostResourceModel::clsss );
	}
}