<?php

namespace Prophetz\Redis;

class Redis
{
    /**
     * @var \Redis
     */
    private $instance;

    /**
     * Redis constructor.
     * @param $server
     */
    protected function __construct($server)
    {
        $this->setInstance(new \Redis());
        $this->setServer($server);
    }

    /**
     * @return \Redis
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * @param \Redis $instance
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
    }

    /**
     * @param $server array
     */
    public function setServer($server)
    {
        $this->getInstance()->connect($server['host'], $server['port']);
    }
}