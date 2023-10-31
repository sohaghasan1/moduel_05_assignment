<?php
if(isset($_GET['email'])){
    $get_email = trim($_GET['email']) ;

    $fp = fopen("./include/db.txt", "r");

    $string_data = "";
    // $role = array();
    while($line = fgets($fp)){
    $data = explode(",", $line);
    if(trim($data[2]) != $get_email){
        $string_data .= "$line";
    }
    
    }

    fclose($fp);
    $file_open = fopen("./include/db.txt", "w");

    $delete = fwrite($file_open, $string_data);
    fclose($file_open);
    if($delete){
        header("Location:user.php");
    }
    }

?>