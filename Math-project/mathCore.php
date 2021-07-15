<html>
    <head lang="en">
        <title> Math website :) </title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body>
        <?php include "header.html"; // Includes the local header file?>
        <p> Possible math opeations: 1. power, 2. log, 3. factorial </p>
        <form action="mathCore.php" method="post">
            <p> Choose an operation: </p> <input type="number" name="operation">
            <p> Value 1: </p> <input type="number" name="num1">
            <p> Value 2: </p> <input type="number" name="num2">
            <br><br> <input type="submit" name="Done!">
        </form>
        <?php
            // Get the operator and the values from the user
            $desiredMathOperation = $_POST["operation"];
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            // Refer to a dynamic (local) php file with math operations;
            include "mathFunctions.php";

            // Switch statement to decide on various opearions
            switch ($desiredMathOperation)
                // Uses math functions from a local php file
            {
                case 1:
                    $output = powerFunction($num1, $num2);
                    break;
                case 2:
                    $output = logFunction($num1, $num2);
                    break;
                case 3:
                    $output = factorialFunction($num1);
                    break;
                default:
                    // Handles the incorrect operator
                    echo "Error! Missing operation";
            }
            // Exports the numeric result
            echo "<p>Result: $output</p>";
        ?>
    </body>
</html>
