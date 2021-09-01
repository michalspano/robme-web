<html lang="en">
    <head>
        <title>My test project</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php include "body.php"; // Includes the local body structure; ?>
    <?php displayHeader(); ?>
    <div class="customForm">
        <form name="myForm" action="index.php" onsubmit="checkAttributes()" method="post">
            <p style="display: inline"> Mark & name: </p>
            <input type="number" name="mark">
            <input type="text" name="student">
            <br><br>
            <input type="submit" name="Done!">
            <input type="reset" name="Reset">
        </form>
    </div>
    <?php
        // Receive values from the form
        // Using a dict. with key(s) and its value(s);
        $myDict = ["student"=>$_POST["student"], "mark"=>$_POST["mark"]];
    ?>
    <?php
        // Class data module;
        class StudentClass
        {
            // Public var;
            public $mark;
            public $name;

            function __construct($name, $mark)
            {
                // Assigns the values to struct variables under given conditions;
                $this->getCorrectName($name);
                $this->getCorrectMark($mark);
            }
            function getCorrectMark($mark)
            {
                // Correct mark is 1-5 only, otherwise throw an error (using JS);
                if ($mark > 0 && $mark < 6)
                {
                    // Assigns the values only if the condition is passed;
                    $this->mark = $mark;
                }
            }
            function getCorrectName($name)
            {
                // If name is not empty, then assign the name value;
                // Otherwise throw an error (using JS);
                if ($name != "")
                {
                    $this->name = $name;
                }
            }
            function exportCredentials()
            {
                // Displays the prompt message
                echo "<p><b><i>$this->name</i></b> 
                received mark: <b><i>$this->mark.</i></b> </p>";
            }
        }

        // Overrides the Student class
        class ModifiedStudent extends StudentClass
        {
            function displayModified()
            {
                // Display the prompt message n times; n=value of the mark;
                for ($i = 0; $i < $this->mark; $i++)
                {
                    $this->exportCredentials();
                }
            }
        }
        // Creates a class instance;
        $studentInstance1 = new ModifiedStudent($myDict["student"], $myDict["mark"]);
        // Calls the specifies method of a class (or subclass);
        $studentInstance1->displayModified();

        // Displays the footer of the website in the end;
        displayFooter();
    ?>
    </body>
    <script src="script.js"></script>
</html>
