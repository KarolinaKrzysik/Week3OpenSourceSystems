<?php
    if($_POST["txtage"] < 21){
        echo "You are under 21 years old. <br/>";
    }
    else{
        echo "You are 21 years old or over. <br/>";
    }
    switch ($_POST["txtgender"]){
        case "Male": echo "You are a male."; break;
        case "Female": echo "You are a female."; break;
        case "Other": echo "You identify yourself as neither male nor female."; break;
        default: echo "Your input wasn\'t in a required format."; 
    }
?>