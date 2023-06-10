<?php

    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php"); // Replace "index.php" with the desired page
    exit();
    echo "You have been logged out successfully.";