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
    <title>object_functions</title>
</head>
<body>
    <?php
     
        class Movie {
            public $title;
            public $rating;
            

            function __construct($title, $rating){
                $this->title = $title;
                $this->rating = $rating;
            }
        }

        $avengers = new Movie("Avengers", "PG-13");

        echo $avengers->rating;
        
    ?>
</body>
</html>

