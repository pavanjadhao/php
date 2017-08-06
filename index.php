<?php
    
    //validate integer range
    $int = 75;
    // Validate sample integer value
    if(filter_var($int, FILTER_VALIDATE_INT,
    array("options" => array("min_range" => 0,"max_range" => 100)))){
        echo "The <b>$int</b> is within the range of 0 to 100";
    } else {
        echo "The <b>$int</b> is not within the range of 0 to 100";
    }

    // Sample website url
    $url = "http://www.example.com";
    
    // Validate website url for query string
    if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
        echo "The <b>$url</b> contains query string";
    } else{
        echo "The <b>$url</b> does not contain query string";
    }

    // Sample website url
    $url = "http://www.example.com";
    
    // Remove all illegal characters from url
    $url = filter_var($url, FILTER_SANITIZE_URL);
    
    // Validate website url
    if(filter_var($url, FILTER_VALIDATE_URL)){
        echo "The <b>$url</b> is a valid website url";
    } else{
        echo "The <b>$url</b> is not a valid website url";
    }

    //sanitizing and validating email address
    $emailInput = "pavan.jadhao@gmail.com";
    //sanitizing email
    $email = filter_var($emailInput,FILTER_SANITIZE_EMAIL);
    //validating email
    if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo '<b>' . $emailInput . '</b>' . ' valid email.';
    }else {
        echo '<b>' . $emailInput . '</b>' . ' not valid email.'; 
    }

    //Check the IP address is v4 or v6
    $IP = "2001:db8:85a3:8d3:1319:8a2e:370:7348";
    if(filter_var($IP,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)) {
        echo 'IPV4';
    }elseif(filter_var($IP,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)) {
        echo 'IPV6';
    }else {
        echo 'This is not IP address.';
    }

    $inIp = '255.255.255.255';
    //By default this validation assumes that 0 is not valid integer
    if(filter_var($inIp,FILTER_VALIDATE_IP)){ //We can also validate IPV4 or IPV6
        echo '<b style="color:green">' . $inIp. " is valid IP address </b>";
    }else {
        echo '<b style="color:red">' . $inIp  . " is not valid IP address </b>";
    }

    ///Sanitizing String
    $input = "<p>This Is Simple Sanitization</p><br><h1> This Is Simple Sanitization</h1>";
    $sanitizedInput = filter_var($input,FILTER_SANITIZE_STRING);
    echo $sanitizedInput;

    //Validathing Integer
    $inNumber = 54564156;
    //By default this validation assumes that 0 is not valid integer
    if(filter_var($inNumber,FILTER_VALIDATE_INT) == 0 || filter_var($inNumber,FILTER_VALIDATE_INT)){
        echo '<b style="color:green">' . $inNumber. " is valid integer </b>";
    }else {
        echo '<b style="color:red">' . $inNumber  . " is not valid integer </b>";
    }


