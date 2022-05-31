<?php

namespace port389\NetBox\Api\Secrets;

use GuzzleHttp\Exception\GuzzleException;
use port389\NetBox\Api\AbstractApi;

class Session extends AbstractApi
{
    /**
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function list(array $params = []): array
    {
        return $this->post("/secrets/get-session-key/", $params);
    }
}
