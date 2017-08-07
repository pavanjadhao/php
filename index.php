<?php
//turn off default error reporting
    error_reporting(0);
try{
//file for performing operations
    $file = 'new.txt';

//opening file
    $handle = fopen($file,'r');

    //handling exceptions if occurs
    if(!$handle) {
        throw new exception("Can't open file", 5);
    }

    //here attempting to open file
    $content = fread($handle,filesize($file));
    if(!$content) {
        throw new exception('Could not open file', 10);
    }

    echo $content;

    //closing file
    fclose($handle);
} catch(Exception $e) {
    echo '<h1>Caught Exceptions.</h1>';
    echo '<p> Error message : ' . $e->getMessage() . '</p>';
    echo '<p> File : ' . $e -> getFile() . '</p>';
    echo '<p> Line : ' . $e -> getLine() . '</p>';
    echo '<p> Code : ' . $e -> getCode() . '</p>';
    echo '<p> Trace : ' . $e -> getTraceAsString() . '</p>';
    
}