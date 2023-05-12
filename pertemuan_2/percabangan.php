<?php 
$nilai = 70;
if ($nilai >= 90) {
    echo "Nilai UAS anda : $nilai, Grade = A";
}else if ($nilai > 70 && $nilai < 90 ) {
    echo "Nilai UAS anda : $nilai, Grade = B";
}else if ($nilai <= 70){
    echo "Nilai UAS anda : $nilai, Grade = C";
}else {
    echo 'Nilai yang anda masukkan tidak valid';
}
?>