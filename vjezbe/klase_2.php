<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS">
    <meta name="descritpion" content="..."
    <meta name="author" content="@Enes Basic">
    <meta name="robots" content="nofollow">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>klase_2</title>
</head>
<body>
    <?php
        // klasa je blueprint tj, sta je u nasem slucaju knjiga novi tip podatka
        class Book {
            var $title;
            var $author;
            var $pages;
        }

        // objekat je instanca/pozivanje klase
        $book1 = new Book;//$book1 je objekat od klase Book
        $book1->title = "Harry Potter";
        $book1->author = "JK Rowling";
        $book1->pages = 400;

        $book2 = new Book; //$book2 neki drugi objekat od klase Book
        $book2->title = "Lord of the Rings";
        $book2->author = "Tolkien";
        $book2->pages = 700;

        echo $book1->author;
        echo "<br>";
        echo $book2->pages;

    ?>
</body>
</html>



