<?php


namespace ALevel\QuickOrder\Api\Data;


interface StatusInterface
{
    const STATUS_ID = 'status_id';

    const LABEL = 'label';

    /**
     * @return mixed
     */
    public function getStatusId();

    /**
     * @param $status_id
     * @return mixed
     */
    public function setStatusId($status_id);

    /**
     * @return mixed
     */
    public function getLabel();

    /**
     * @param $label
     * @return mixed
     */
    public function setLabel($label);

}
