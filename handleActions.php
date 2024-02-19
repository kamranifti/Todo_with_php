<?php
require "database.php";

    if (isset($_POST["add"])) 
    {
        if($_POST["inputBox"]!=NULL){
            add_item($_POST["inputBox"]);
        }
        
    }

    else if(isset($_POST["checked"])){
        update_items($_POST["checked"]);
    }
    
    else if(isset($_POST["deleted"])){
        delete_items($_POST["deleted"]);
    }

    header("location:index.php");

