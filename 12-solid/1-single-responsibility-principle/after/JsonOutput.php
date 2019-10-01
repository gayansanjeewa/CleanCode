<?php


namespace after;


class JsonOutput implements SalesOutputInterface
{

    /**
     * @inheritDoc
     */
    public function output($sales)
    {
        return json_encode(['sales' => $sales]);
    }
}