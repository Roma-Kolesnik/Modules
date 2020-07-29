<?php


namespace ALevel\QuickOrder\DataProvider;

use Magento\Ui\DataProvider\AbstractDataProvider;
use ALevel\QuickOrder\Api\Data\StatusInterface;
use ALevel\QuickOrder\Model\ResourceModel\Status\CollectionFactory;

class StatusProvider extends AbstractDataProvider
{
    private $collectionFactory;

    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $collectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    )
    {
        $this->collection = $collectionFactory->create();
        $this->collectionFactory = $collectionFactory;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();

        if (empty($items)) {
            return [];
        }

        /** @var $item StatusInterface */
        foreach ($items as $item) {
            $this->loadedData[$item->getStatusId()] = $item->getData();
        }

        return $this->loadedData;
    }

    private function getStatusCollection()
    {
        if (null === $this->collection) {
            $this->collection = $this->collectionFactory->create();
        }

        return $this->collection;
    }
}
