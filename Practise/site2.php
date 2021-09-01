<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style2.css">
        <title> This is a secondary website </title>
    </head>
    <body>
    <h1> Dictionaries in php! </h1>

    <form action="site2.php" method="post">
        Input a student's name: <label>
            <input type="text" name="student">
        </label>
        <input type="submit">
    </form>
    <?php
        // Associative arrays / Dictionaries;
        // "key": value; ["key"=>value];
        $grades = ["Michal"=>"A+", "Daniel"=>"A", "Peter"=>"B", "Fares"=>"A-"];
        $desired_student_name = $_POST["student"];

        echo "$desired_student_name's grade: ";
        echo "<b><i>$grades[$desired_student_name]</i></b>";
        echo "<hr>";
    ?>
    <h1> Functions in php! </h1>
    <p> A simple calculator </p>
    <form action="site2.php" method="post">
        Number 1: <label>
            <input type="number" step="0.001" name="num1">
        </label>
        Number 2: <label>
            <input type="number" step="0.001" name="num2">
        </label>
        Operation: <label>
            <input type="text" name="op">
        </label>
        <input type="submit" value="Done!">
    </form>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["op"];

        // Universal math function
        function mathFunctionHandler($n1, $n2, $op)
        {
            switch ($op) {
                case "+":
                    return $n1 + $n2;
                case "-":
                    return $n1 + $n2;
                case "*":
                    return $n1 * $n2;
                case "/":
                    return $n1 / $n2;
                default:
                    echo "Invalid operator";
                    return;
            }
        }
        $result = round(mathFunctionHandler($num1, $num2, $operator), 5);
        echo "<p> Output: $num1 $operator $num2 = <b><i>$result</i></b></p>";
        echo "<hr>";
    ?>
    <?php
        /* And operator - &&;
        Or operator - ||;
        Negation '!statement'; */

        $isTall = null;

        if (!$isTall)
        {
            //TO-DO... if var is false;
        }
        else
        {
            //TO-DO... if var is true;
        }
        $isMale = false;
        $isTall = false;

        // Conditions
        if ($isMale && $isTall)
        {
            echo "You are a tall male.";
        }
        elseif ($isMale || $isTall)
        {
            echo "You are either tall or a male.";
        }
        else
        {
            echo "You are neither tall nor a male.";
        }
        echo "<hr>";
    ?>
    <?php
        function getMax($num1, $num2, $num3)
        {
            return max($num1, $num2, $num3);
        }
        $output = getMax(1, 100, 3);
        echo "Max value is: $output";
    ?>
    <h1> Switch statement </h1>
    <p> A simple switch statement integration</p>
    <form action="site2.php" method="post">
        Grade: <label>
            <input type="text" name="grade">
        </label>
        <input type="submit" name="Done">
    </form>
    Prompt: <?php
        $grade = $_POST["grade"];
        // Switch statement in Php
        switch ($grade)
        {
            case "A":
                echo "You did very well!";
                break;
            case "B":
                echo "You did pretty good!";
                break;
            // Different values...
            case "F":
                echo "You did poorly!";
                break;
            default:
                echo "Error! No grade was written!";
                break;
        }
        echo "<hr>";
    ?>
    <h1> While loops </h1>
    <?php
        // While loop
        $index = 6;
        do
        {
            echo "$index <br>";
            $index++;
        }
        while ($index <= 10); // Do while loop
        echo "<hr>";
    ?>
    <h1> For loops </h1>
    <?php
        $myList = [];
        for ($j = 0; $j < 10; $j++)
        {
            try {
                array_push($myList, random_int(100, 200));
            } catch (Exception $e) {
            }
        }
        for ($i = 0; $i < count($myList); $i++)
        {
            echo "$myList[$i] <br>";
        }
    ?>
    <?php
        // Html header and footer files inclusion via 'include';
        include "header.html";
        echo "<p>This is a test note </p>";
        include "footer.html";
    ?>
    <?php
        // Include a php file;
        // Access variables from a local php file;
        // Using dynamic php;
        $title = "My first blog post";
        $author = "Michal";
        $wordCount = 500;
        include "test.php";
        echo "<hr>";

        // Include functions from a local php file;
        include "func.php";
        $result = myPowerFunction(5, 5);
        echo "<p> $result </p>";
    ?>

    </body>
    <script src="script.ts"></script>
</html>