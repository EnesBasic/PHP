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
     
        class Chef {
            function makeSpecialdish(){
                echo "The Chef makes chicken <br>"; 
            }
            

            function makeSalad(){
                echo "The Chef makes salad <br>"; 
            }

            function makeSpecialFish(){
                echo "The Chef makes bbq ribs <br>"; 
            }
            
        }
     
        class italianChef extends Chef{
            function makeSpecialDFish(){
                echo "The ItalianChef makes Pasta<br>";
            }
            function makeSpecialDish(){
                echo "The ItalianChef makes Chicken parm<br>";
            }
        }


        $chef = new Chef();
        $chef->makeSpecialDish();

        $italianChef = new italianChef();
        $italianChef->makeSpecialDish();
        
    ?>
</body>
</html>