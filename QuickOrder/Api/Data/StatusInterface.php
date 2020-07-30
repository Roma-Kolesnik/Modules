<?php


namespace ALevel\QuickOrder\Api\Data;


interface StatusInterface
{
    const STATUS_ID = 'status_id';

    const LABEL = 'status';

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
    public function getStatus();

    /**
     * @param $label
     * @return mixed
     */
    public function setStatus($label);

}
