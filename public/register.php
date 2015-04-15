<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODOIf $_POST["username"] or $_POST["password"] is empty or if $_POST["password"] does not equal $_POST["confirmation"], you’ll want to inform registrants of their error.
        
        query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"]));
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
