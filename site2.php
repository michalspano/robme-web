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

        for ($r = 0; $r < count($grades); $r++)
        {
            echo "<br>$r";
        }
    ?>
    </body>
    <script src="secondaryScript.ts"></script>
</htmt>