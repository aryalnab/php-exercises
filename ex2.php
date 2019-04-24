<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    /*
    Create a function that would takes in a word as a parameter. 
    Returns the middle character if the number of character is odd, otherwise returns the middle 2 characters
    */


function getMiddleChar($text){
    $text_length = strlen($text);

    if (fmod($text_length, 2)==0){
        return substr($text, ($text_length/2 -1), 2);
    } else {
        return substr($text, floor ($text_length/2), 1);
    }
}

echo getMiddleChar("Nabin")
    ?>
</body>
</html>