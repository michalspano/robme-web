</<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><html lang="en"><head>    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">    <title>Test project</title></head><body><?php    # Default phrase    $phrase = "Michal";    # Upper characters in a string    echo strtoupper($phrase);    echo "<br>";    # Lower characters in a string    echo strtolower($phrase);    echo "<br>";    # Length of a string    echo strlen($phrase);    echo "<br>";    # Indexing a string    echo "The first char in '$phrase: ";    echo $phrase[0];    echo "<br>";    # String replace method    echo str_replace("Mi", "yx", $phrase);    echo "<br>";    # String, substring method    echo "Subtring at index '2' and length of '3' from $phrase: ";    echo substr($phrase, 2, 3);?></body></html>