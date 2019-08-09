<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marvel extends Model
{
    private $ts;
    private $public_key;
    private $private_key;
    private $hash;
    private $config;

    public function __construct()
    {
        $this->ts = 1;
        $this->public_key = ENV('MARVEL_PUBLIC_KEY');
        $this->private_key = ENV('MARVEL_PRIVATE_KEY');
        $md5 = $this->ts . $this->private_key . $this->public_key;
        $this->hash = md5($md5);
        $this->config = "ts={$this->ts}&apikey={$this->public_key}&hash={$this->hash}";
    }

    public function comic_by_id($id)
    {
        $url = "https://gateway.marvel.com:443/v1/public/comics/{$id}?{$this->config}";
        $datos = $this->simple_curl($url);
        return $datos->data->results[0];
    }

    public function character($url)
    {
        $full_url = "{$url}?{$this->config}";
        $datos = $this->simple_curl($full_url);
        return $datos->data->results[0];
    }




    public function comics()
    {
        $url = "https://gateway.marvel.com:443/v1/public/comics?format=comic&formatType=comic&offset=10&{$this->config}";
        return $this->simple_curl($url);
    }

    private function simple_curl($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data);
    }
}
