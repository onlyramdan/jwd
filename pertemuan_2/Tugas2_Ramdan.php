<?php
echo "===============Bilangan Ganjil Genap 1-100===============<br>";  

for ($i = 1; $i <=100 ; $i++) { 
    if ($i%2 == 0) {
        echo "$i adalah bilangan Genap <br>";
    }else{
        echo "$i adalah bilangan Ganjil <br>";
    }
}
?>