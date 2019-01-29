<?php
function getTicket($user,$age)
{
    $ticket =rand(5000, 1000000);

    if ($age >= 18 ){
        $msg  = "Hello ".$user ."Your age is ". $age ."<br>";
        $msg .= "You can get ticket"."<br>";
        $msg .= "Your ticket is [<span>". $ticket."</span>]";
    }
    
    else {
        $msg  = "Hello ".$user ."Your age is ". $age ."<br>";
        $msg .= "Sorry you can not have ticket "."<br>";

    }
    return $msg;
}

$id = getTicket("Samer ",31);

function makeFrame($element){
    $frame  = "<div class = 'nice-frame'>".$element."</div>";

    return $frame;
}

$myElement = makeFrame($id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php echo $myElement; ?>
</body>
</html>