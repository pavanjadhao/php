<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP Program Practice.</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
//Display Files in directories
function outputFiles($path)
{
    //Check path is exist and is directory or not
    if (file_exists($path) && is_dir($path)) {
        //scanning for files in directory
        $result = scandir($path);
        //Filter out current "." and parent ".." directories
        $files = array_diff($result, array('.','..'));
        if (count($files) > 0) {
            //Disply file names
            // Loop through retuned array
            echo '<ul class="list-group">';
            foreach ($files as $file) {
                if (is_file("$path/$file")) {
                    // Display filename
                    echo '<li class="list-group-item">' . $file . '</li>';
                    
                } elseif (is_dir("$path/$file")) {
                    // Recursively call the function if directories found
                    outputFiles("$path/$file");
                }else {
                    echo '<div class="panel panel-default">
                    <div class="panel-heading">
                    <h3 class="panel-title">ERROR</h3>
                    </div>
                    <div class="panel-body">
                    No files found in the directory.
                    </div>
                    </div>';
                }
                echo "</ul>";
            }
        }
    } else {
        echo '<div class="panel panel-default">
                    <div class="panel-heading">
                    <h3 class="panel-title">ERROR</h3>
                    </div>
                    <div class="panel-body">
                    The directory does not exist.
                    </div>
                    </div>';
    }
}

outputFiles('Car');
?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
