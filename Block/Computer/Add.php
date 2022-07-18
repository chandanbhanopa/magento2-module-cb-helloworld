<?php
namespace CB\Helloworld\Block\Computer;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;


class Add extends Template
{
	private $employee;

	public function __construct(Context $context) {
		parent::__construct($context);
    }

    public function getEmployee(){
    	return "Employe List";
    }
}