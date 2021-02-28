<?php
    if($_POST["txtage"] < 21){
        echo "You are under 21 years old. <br/>";
    }
    else{
        echo "You are 21 years old or over. <br/>";
    }
    
    if($_POST["txtgender"] == "Male"){
        echo "You are a male.";
    }elseif($_POST["txtgender"] == "Female"){
        echo "You are a female.";
    }elseif($_POST["txtgender"] == "Other"){
        echo "You identify yourself as neither male nor female.";
    }else{
        echo "Your input wasn't in a required format.";
    }
?>
