<?php

class Xml
{
    public function tojson($data)
    {
        // var_dump($prov);
        $xmlUrl = $data;
        $xmlString = file_get_contents($xmlUrl);
        $xml = simplexml_load_string($xmlString);
        $json = json_encode($xml);
        $jsonString = file_get_contents($json);
        // $hasil = json_decode($json, true);
        $hasil = json_decode($jsonString);
        return $hasil;
        // var_dump($hasil);
    }
}
