<?php

namespace port389\NetBox\Api\Secrets;

use GuzzleHttp\Exception\GuzzleException;
use port389\NetBox\Api\AbstractApi;

class KeyGen extends AbstractApi
{
    /**
     * @param array $params
     * @return mixed
     * @throws GuzzleException
     */
    public function list(array $params = [])
    {
        return $this->get("/secrets/generate-rsa-key-pair/", $params);
    }
}
