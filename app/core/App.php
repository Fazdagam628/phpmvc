<?php
class App
{

    public function __construct()
    {
        // echo "OK!";
        $url = $this->parseURL();
        // var_dump($url);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            return $url;
        }
    }
}
