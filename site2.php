<!DOCTYPE html>
<htmt lang="en">
    <head>
        <link rel="stylesheet" href="style2.css">
        <title> This is a secondary website </title>
    </head>
    <body>
    <h1> Dictionaries in php! </h1>

    <form action="site2.php" method="post">
        Input a student's name: <input type="text" name="student">
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
        Number 1: <input type="number" step="0.001" name="num1">
        Number 2: <input type="number" step="0.001" name="num2">
        Operation: <input type="text" name="op">
        <input type="submit" value="Done!">
    </form>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["op"];

        // Univeral math function
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
        // And operator - &&;
        // Or operator - ||;

        // Negation '!statement';
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
    </body>
    <script src="secondaryScript.ts"></script>
</htmt>