<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - IF Statement</title>
</head>
<body>

    <?php 
        // an if statement that will carry out an action based on the value of the variable
        echo '<h2> If statement';
        $grade = 50;
        // ==, >, <, <=, >=
        if($grade >=50){ // curly braces
            echo '<h3 style = "color: green">You have passed</h3>';
        }else{
            echo '<h3 style = "color: red">You have failed</h3>';
        }
    ?>
    
</body>
</html>