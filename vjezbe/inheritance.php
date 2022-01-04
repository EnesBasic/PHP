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
    <title>Inheritance/Nasljedivanje</title>
</head>
<body>
    <?php
        ini_set('error_reporting', E_ALL);//prikazivanje gresaka xampa na linuxu
        ini_set( 'display_errors', 1 );//prikazivanje gresaka xampa na linuxu
     
        class Movie {
            public $title;
            private $rating;
            
            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                //$this->rating = $rating;
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                    $this->rating = $rating;   
                }else{
                    $this->rating = "NR";
                }

            }
        }

     
        $avengers = new Movie("Avengers", "G");
        // G, PG, PG-13, R, NR

        $avengers->setRating("asdasdsdDog");
        echo $avengers->getRating();
        
    ?>
</body>
</html>

