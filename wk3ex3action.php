<?php
    switch($_POST["radcourse"]){
        case "HNC": echo "You have selected HNC course."; break;
        case "HND": echo "You have selected HND course."; break;
        case "BSC": echo "You have selected BSC course."; break;
        case "PartTimeBSC": echo "You have selected Part Time BSC course."; break;
        default: echo "No course selected.";
    }
?>