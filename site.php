</<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><html lang="en"><head>    <link rel="stylesheet" href="style.css">    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">    <title>Test project</title></head><body>    <h1> This is a PHP test web-site </h1>    <hr><?php    # Default phrase    $phrase = "Michal";    # Upper characters in a string    echo strtoupper($phrase);    echo "<br>";    # Lower characters in a string    echo strtolower($phrase);    echo "<br>";    # Length of a string    echo strlen($phrase);    echo "<br>";    # Indexing a string    echo "The first char in '$phrase: ";    echo $phrase[0];    echo "<br>";    # String replace method    echo str_replace("Mi", "yx", $phrase);    echo "<br>";    # String, substring method    echo "Subtring at index '2' and length of '3' from $phrase: ";    echo substr($phrase, 2, 3);    echo "<hr>";    $num = 10;    for ($num; $num < 20; $num++)    {        echo $num;        echo "<br>";    }    # Numbers, math operations    echo "<h2> Math operations </h2>";    echo "<hr>";    $n = -100;    echo "Absolute value of $n: \n";    echo abs($n);    echo "<br>";    $x = 21.12345;    echo "The square root of $x:\n";    // round(), sqrt() functions    $result = round(sqrt($x), 10);    echo "<p> Result: $result </p>";    // floor() functions -> always rounds by 1 downwards;    $a1 = 3.874;    echo floor($a1);    // User input methods    echo "<h2> User input </h2>";    echo "<hr>";?>    <form action="site.php" method="get">        Name: <input type="text" name="username">        Age: <input type="number" name="age">        <input type="submit">    </form>    <hr>    Your name is: <?php echo $_GET["username"]; ?> <br>    Your age is: <?php echo $_GET["age"]; ?></body></html>