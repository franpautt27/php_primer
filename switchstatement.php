<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch statement</title>
</head>
<body>
    <h1>Switch statements</h1>
    <?php 
        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h2>YOU ARE A SUPERSTAR!</h2>';
                break;
                
            case 'B':
                echo '<h2>YOU DID WELL!</h2>';
                break;
            default:
                echo '<h2>YPU HAVE FAILED.....</h2>';
                break;
        }
    ?>
</body>
</html>