<?php

namespace ALevel\QuickOrder\Controller\Record;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use ALevel\QuickOrder\Repository\OrderRepository;
use ALevel\QuickOrder\Model\OrderService;


class Add extends Action
{

    /**
     * @var OrderRepository
     */
    private $orderRepository;

    /**
     * @var OrderService
     */
    private $orderService;

    public function __construct(
        Context $context,
        OrderRepository $orderRepository,
        OrderService $orderService
    )
    {
        parent::__construct($context);
        $this->orderRepository = $orderRepository;
        $this->orderService = $orderService;
    }

    public function execute()
    {
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);

        if ($this->getRequest()->isAjax()) {
            $newObject = $this->orderService->prepareObjectOrder($this->getRequest());

            try {
                $this->orderRepository->save($newObject);
                return $resultJson->setData(
                    [
                        'errors' => false,
                        'message' => __('Your order is saved'),
                    ]
                );
            } catch (\Exception $e) {
                return $resultJson->setData(
                    [
                        'errors' => true,
                        'message' => __('Something went wrong'),
                    ]
                );
            }
        }
        return true;
    }
}
