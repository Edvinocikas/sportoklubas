<?php

class App
{
    public function __construct()
    {

        $url = $this->splitURL();
        echo "<pre>";
        print_r($url);
        echo "</pre>";

    }
    private function splitURL()
    {
       return explode("/",filter_var(trim($_GET['url'],"/"), FILTER_SANITIZE_URL)) ;
    }
}