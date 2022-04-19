<?php
namespace App\Core;

class Request{

    private $params;
    private $methode ;
    private $agent;
    private $ip;
    private $uri;

    public function __construct()
    {
        $this->params = $_REQUEST;
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->methode =strtolower($_SERVER['REQUEST_METHOD']);
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->uri = strtok($_SERVER['REQUEST_URI'],'?');
    }
    
    public function params()
    {
        return $this->params;
    }
    public function methode()
    {
        return $this->methode;
    }
    public function agent()
    {
        return $this->agent;
    }
    public function ip()
    {
        return $this->ip;
    }
    public function uri()
    {
        return $this->uri;
    }
    public function input($key)
    {
        return $this->params[$key] ?? null;
    }
}