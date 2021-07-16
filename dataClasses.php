<html>
    <head>
        <link rel="stylesheet" href="style2.css">
        <title> Classes and methods! </title>
    </head>
    <body>
        <?php
            // Book class (a custom structure);
            class Book
            {
                // Default datatypes (specification of a data class);
                var $title;
                var $author;
                var $pages;

                // Constructor; called upon class instance creation
                function __construct($index, $_title, $_author, $_pages)
                {
                    // Refers to the current object;
                    // Using $this to pass the values;
                    $this->title = $_title;
                    $this->author = $_author;
                    $this->pages = $_pages;
                    echo "<p>New book was created: $index </p><br>";
                }
            }
            /* Object - instance of a class;
            Using '->' for subclass instance; */
            $book1 = new Book("Book 1", "Harry Potter",
                "JK Rowling", 400);  // Calling the Constructor with values

            // Access the class information
            $book1->pages = 500;
            echo "<p>$book1->title</p>";
            echo "<p>$book1->author</p>";
            echo "<p>$book1->pages</p>";
            echo "<hr>";
        ?>
        <?php
            class Student
            {
                var $name;
                var $major;
                var $gpa;

                function __construct($name, $major, $gpa)
                {
                    $this->name = $name;
                    $this->major = $major;
                    $this->gpa = $gpa;
                }

                function hasHonors()
                {
                    if ($this->gpa >= 3.5)
                    {
                        return "true";
                    }
                    else
                    {
                        return "false";
                    }
                }
            }
            // Student instances;
            $student1 = new Student("Michal", "Math", 4);
            $student2 = new Student("Fares", "Inf", 2);
            // Calls the method of a class;
            echo $student1->hasHonors();
            echo "<br>";
            echo $student2->hasHonors();
            echo "<hr>";
        ?>
        <?php
            // Getters and setters;
            class Movie
            {
                // Public or private key values;
                // public = var - interchangable;
                public $title;

                // Only accessed within the class itself;
                // Setters and getters and needed
                private $rating;

                function __construct($title, $rating)
                {
                    $this->title = $title;
                    // Handles the specified condition;
                    $this->setRating($rating);
                }
                // Access the rating even if private var;
                // Getter function;
                function getRating()
                {
                    return $this->rating;
                }
                // Modify the rating;
                // Setter function;
                function setRating($rating)
                {
                    // Only assign the rating value if this condition is completed;
                    if ($rating == "G" || $rating == "PG" || $rating == "R")
                    {
                        $this->rating = $rating;
                    }
                    // Else assign "NR" -> Not Rated;
                    else
                    {
                        $this->rating = "NR";
                    }
                }
            }
            $avengers = new Movie("Avengers", "Dog");
            echo $avengers->getRating();
            echo "<hr>";
        ?>
        <?php
            // Inheritance;
            class Chef
            {
                public $name;

                function __construct()
                {
                    $this->name = "default chef";
                }
                function makeChicken()
                {
                    echo "<p>The $this->name makes chicken </p>";
                }
                function makeSalad()
                {
                    echo "<p>The $this->name makes a salad </p>";
                }
                function makeSpecialDish()
                {
                    echo "<p>The $this->name makes BBQ ribs </p>";
                }
            }
            // ItalianChef inherits all methods from the default chef
            class ItalianChef extends Chef
            {
                function __construct()
                {
                    $this->name = "Italian chef";
                }
                function makePasta()
                {
                    echo "<p>The $this->name makes pasta</p>";
                }
                // Overriding an already defined class;
                function makeSpecialDish()
                {
                    echo "<p>The $this->name makes chicken parm</p>";
                }
            }
            // Calls the default chef;
            $chef = new Chef();
            $chef->makeSpecialDish();

            // Calls the specialized chef;
            $italianChef = new ItalianChef();
            $italianChef->makeSpecialDish();
        ?>
    </body>
</html>