<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        // For Loops
        //less than 10
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD FOR '.$count. ' time</p>';
        }

        do{
            echo '<p>I AM DO A WHILE LOOP</p>';
        }while($grade <  10);

        //a variable
        $num = 3;
        //an array
        //only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10);
        echo $numbers[5];
        //how many elements in an array
        $size = count($numbers);
        $count=0;
        for($count =0; $count < $size;$count++){
            echo "$numbers[$count]";
        }
    
    ?>
</body>
</html>