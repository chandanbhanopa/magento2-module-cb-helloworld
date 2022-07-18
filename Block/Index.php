<?php
namespace CB\Helloworld\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use CB\VirtualDemo\Model\Employee;


class Index extends Template
{
	private $employee;

	public function __construct(Context $context, Employee $emp) {
		$this->employee = $emp;
		parent::__construct($context);
    }

    public function getEmployee(){
    	return "Employe List";
    }
}