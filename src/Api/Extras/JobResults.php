<?php

namespace port389\NetBox\Api\Extras;

use GuzzleHttp\Exception\GuzzleException;
use port389\NetBox\Api\AbstractApi;

class JobResults extends AbstractApi
{
    /**
     * @param array $params
     * @return mixed
     * @throws GuzzleException
     */
    public function list(array $params = [])
    {
        return $this->get("/extras/job-results/", $params);
    }

    /**
     * @param int $id
     * @param array $params
     * @return mixed
     * @throws GuzzleException
     */
    public function show(int $id, array $params = [])
    {
        return $this->get("/extras/job-results/" . $id . "/", $params);
    }
}
