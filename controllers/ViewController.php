<?php 

if (!defined('CHECK')) {
    header('Location: /');
}

require "./Constants.php";

class ViewController {

    public static function create() {
        
        $request = $_SERVER["REQUEST_URI"];
        $section = [ "url" => "", "title" => "" ];
        global $URLs;
        global $fbRedirect;

        if (isset($_GET["fb"])) {
            ViewController::redirect($fbRedirect);
        }

        foreach ($URLs as $key => $value) {
            if ($key == $request) {
                $section["title"] = $value["title"];
                $section["url"] = $value["url"];
                return $section;
            }
        }
        ViewController::redirect("/");
    }

    public static function redirect($url, $statusCode = 303) {
        
        header('Location: ' . $url, true, $statusCode);
        die();
    }
    
}

?>