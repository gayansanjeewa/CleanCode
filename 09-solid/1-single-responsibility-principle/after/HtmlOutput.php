<?php


namespace after;


class HtmlOutput implements SalesOutputInterface
{

    /**
     * @inheritDoc
     */
    public function output($sales)
    {
        return "<h1>Sales: $sales</h1>";
    }
}