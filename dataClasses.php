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

            echo "<p>$book1->title</p>";
            echo "<p>$book1->author</p>";
            echo "<p>$book1->pages</p>";
        ?>
    </body>
</html>