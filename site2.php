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
    <p> Making a simple calculator </p>
    <form action="site2.php" method="post">
        Number 1: <input type="number" name="num1">
        Number 2: <input type="number" name="num2">
        Operation: <input type="text" name="op">
        <input type="submit">
    </form>
    Output: <?php
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
            }
        }
        $result = round(mathFunctionHandler($num1, $num2, $operator), 2);
        echo "<p> $num1 $operator $num2 = <b>$result</b></p>";
    ?>
    </body>
    <script src="secondaryScript.ts"></script>
</htmt>