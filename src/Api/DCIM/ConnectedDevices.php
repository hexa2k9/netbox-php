<?php

namespace port389\NetBox\Api\DCIM;

use GuzzleHttp\Exception\GuzzleException;
use port389\NetBox\Api\AbstractApi;

class ConnectedDevices extends AbstractApi
{
    /**
     * @param array $params
     * @return mixed
     * @throws GuzzleException
     */
    public function list(array $params = [])
    {
        return $this->get("/dcim/connected-device/", $params);
    }
}
