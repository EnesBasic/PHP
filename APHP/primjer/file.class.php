<?php
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

class File{

    private $file;

    public function __construct($file){
        $this->file = $file;
    }

    public function get($decode = true){    // ako ne znam da li je fajl json
        if(file_exists($this->file)){
            $result = file_get_contents($this->file);
            if($decode){
                $result = json_decode($result, true);
            }
        }else{
            $result = array();
        }
        return $result;
    }

    public function set($content, $encode = true, $decode = true){
        if(file_exists($this->file)){
            $result = file_get_contents($this->file);
            if($decode){
                    $result = json_decode($result, true);
                }
            }else{
                $result = array();
            }

            if(isset($content["username"]) && isset($content["password"])){
                if(!empty($content["username"]) && !empty($content["password"]))
                $username = $content["username"];
                $username = $content["password"];
            }
        }
}

?>