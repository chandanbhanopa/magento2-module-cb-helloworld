<?php declare(strict_types=1);

namespace CB\Helloworld\ViewModel;

use Magento\Framework\DataObject;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Post implements ArgumentInterface{
	
	public function getList(){
		return [
			new DataObject(['id'=>1, 'title'=>"Blog Post one"]),
			new DataObject(['id'=>2, 'title'=>"Blog Post two"]),
			new DataObject(['id'=>3, 'title'=>"Blog Post one"])

		];
	}

}

