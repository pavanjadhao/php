<?php
    $file = "note1.txt";

    if(file_exists($file)) {
        if(unlink($file)) {
            echo "File removed successfully.";
        } else {
            echo "File not removed.";
        }
    } else {
        echo "file not exist, we created new file.";
        fopen("new.txt","w");
    }