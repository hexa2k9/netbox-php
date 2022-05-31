<?php

namespace port389\NetBox\Api\DCIM;

use GuzzleHttp\Exception\GuzzleException;
use port389\NetBox\Api\AbstractApi;

class ConsoleServerPorts extends AbstractApi
{
    /**
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function add(array $params = []): array
    {
        return $this->post("/dcim/console-server-ports/", $params);
    }

    /**
     * @param int $id
     * @param array $params
     * @return bool
     * @throws GuzzleException
     */
    public function remove(int $id, array $params = []): bool
    {
        return $this->delete("/dcim/console-server-ports/" . $id . "/", $params);
    }

    /**
     * @param int $id
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function edit(int $id, array $params = []): array
    {
        return $this->put("/dcim/console-server-ports/" . $id . "/", $params);
    }

    /**
     * @param array $params
     * @return mixed
     * @throws GuzzleException
     */
    public function list(array $params = [])
    {
        return $this->get("/dcim/console-server-ports/", $params);
    }

    /**
     * @param int $id
     * @param array $params
     * @return mixed
     * @throws GuzzleException
     */
    public function show(int $id, array $params = [])
    {
        return $this->get("/dcim/console-server-ports/" . $id . "/", $params);
    }
}
