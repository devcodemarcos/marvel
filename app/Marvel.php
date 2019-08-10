<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function GuzzleHttp\json_decode;

class Marvel extends Model
{
    private $config;

    public function __construct()
    {
        $ts = 1;
        $custom_key = $ts . ENV('MARVEL_PRIVATE_KEY') . ENV('MARVEL_PUBLIC_KEY');
        $hash = md5($custom_key);
        $this->config = "ts={$ts}&apikey=" . ENV('MARVEL_PUBLIC_KEY') . "&hash={$hash}";
    }

    public function comic_by_id($id)
    {
        $url = "https://gateway.marvel.com:443/v1/public/comics/{$id}?{$this->config}";
        $datos = $this->get_data($url);
        return $datos->data->results[0];
    }

    public function character($url)
    {
        $full_url = "{$url}?{$this->config}";
        $datos = $this->get_data($full_url);
        return $datos->data->results[0];
    }

    public function comics()
    {
        $limite = 36;
        $url = "https://gateway.marvel.com:443/v1/public/comics?format=comic&formatType=comic&limit={$limite}&{$this->config}";
        $datos = $this->get_data($url);
        return $datos->data->results;
    }

    private function get_data($url)
    {
        $data = file_get_contents($url);
        return json_decode($data);
    }
}
