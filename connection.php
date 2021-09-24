<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "internship";

    tyr{
        $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
        $db->setAttribute(PDO::ATTR_EERMODE)
    }catch(PDOException $e){
        $e->getMessage();
    }

?>