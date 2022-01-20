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
    <title>konstruktori</title>
</head>
<body>
    <?php
        // klasa je blueprint tj, sta je u nasem slucaju knjiga novi tip podatka
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        // objekat je instanca/pozivanje klase
        $book1 = new Book("Harry Potter","JK Rowling",400);//$book1 je objekat od klase Book
        $book1->title = "Hunger Games";//mozemo promijeniti podatak ovdje slobodno
        $book2 = new Book("Lord of the Rings","Tolkien", 700); //$book2 neki drugi objekat od klase Book

        echo $book1->title;
        echo $book2->pages;

    ?>
</body>
</html>



