<?php
    if(isset($_POST['jsonInput'])) {
        $jsonInput = $_POST['jsonInput'];
        $jsonDecode = json_decode($jsonInput, true);
        if($jsonDecode=="" || $jsonDecode==null || $jsonDecode==false) {
            echo "not valid";
        } else {
            echo "valid";
        }
    }
    echo file_get_contents('startpage.html');
?>