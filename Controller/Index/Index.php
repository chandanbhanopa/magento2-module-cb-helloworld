<?php

namespace CB\Helloworld\Controller\Index;

use Magento\Framework\App\Action\Action;
use CB\VirtualDemo\Model\Greetings;
use CB\VirtualDemo\Model\Employee;

class Index extends Action {
  protected $_pageFactory;
  private $greetings;
  private $employee;

  public function __construct(
  \Magento\Framework\App\Action\Context $context,
  \Magento\Framework\View\Result\PageFactory $pageFactory
)
  {
      $this->_pageFactory = $pageFactory;
      return parent::__construct($context);
  }

  public function execute() {
      $page = $this->_pageFactory->create();
      return $page;

  }
}
