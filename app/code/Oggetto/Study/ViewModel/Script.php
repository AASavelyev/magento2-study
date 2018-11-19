<?php

namespace Oggetto\Study\ViewModel;

use Magento\Catalog\Model\Product;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Script implements ArgumentInterface
{
    public function getMessage(): string
    {
        return "<script>alert(0)</script>";
    }
}
