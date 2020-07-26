<?php

namespace ALevel\BlockLayoutController\Block;

use Magento\Framework\View\Element\Template;
use ALevel\BlockLayoutController\DataProvider\DataForInfo;

class Info extends Template
{
    /**
     * @var DataForInfo
     */
    private $dataForInfo;

    /**
     * Info constructor.
     * @param Template\Context $context
     * @param DataForInfo $dataForInfo
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        DataForInfo $dataForInfo,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->dataForInfo = $dataForInfo;
    }

    public function messageFromBlock() : string
    {
        $this->dataForInfo->infoFromBlock();
    }
}
