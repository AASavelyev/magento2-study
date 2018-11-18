<?php

namespace Oggetto\Promo\Controller\Available;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    private $pageFactory;

    /**
     * init controller
     *
     * @param PageFactory $pageFactory
     * @param Context     $context
     */
    public function __construct(PageFactory $pageFactory, Context $context)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    /**
     * execute
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->pageFactory->create();
    }
}