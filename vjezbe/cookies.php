<?php
//setcookie("ime","Enes");
setcookie("ime","ITAcademy7", time() + 60*60*24*30);
//brisanje cookieja
//setcookie("ime","enes",time()-3600);
//echo "Vrijednost je :" . $_COOKIE["ime"];
if(!$_COOKIE["ime"]=="ITAcademy6"){
    header("refresh:0");
}

if (isset ($_COOKIE["ime"])){
    echo ("Vrijednost je:" .$_COOKIE["ime"]);
}else{
    echo ("Ne postoji taj cookie!");
}

echo "<br>";

if (count($_COOKIE)>0){
echo "cookies are enabled";
}else{
    echo "cookies are disabled";
}
?>

