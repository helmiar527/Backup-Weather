<?php

class Bmkg
{
    private $api;
    public function __construct()
    {
        $this->api = new Xml;
    }
    public function cuaca($post)
    {
        $prov = LISTPROV[$post['daerah']];
        // var_dump($prov);
        $this->api->tojson($prov);
    }
}
