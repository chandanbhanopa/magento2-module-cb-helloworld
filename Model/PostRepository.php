<?php declare(strict_types=1);
namespace CB\Helloworld\Model;

use CB\Helloworld\Api\PostRepositoryInterface;
use CB\Helloworld\Model\PostFactory;
use CB\Helloworld\Model\ResourceModel\Post as PostResourceModel;
use CB\Helloworld\Api\Data\PostInterface;

class PostRepository implements PostRepositoryInterface {

	protected $postFactory;
	protected $postResourceModel;

	public function __construct(PostFactory $postFactory, PostResourceModel $postResourceModel){
		$this->postFactory = $postFactory;
		$this->postResourceModel = $postResourceModel;
	}

	public function getById(int $id):PostInterface {

	}

	public function save(PostInterface $post):PostInterface {

	}

	public function deleteById(int $id): bool{

	}
}