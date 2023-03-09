<?php if(isset($_POST['submit'])) : ?>
<?php
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas =$_POST['tugas'];



$nilai_uts = $uts * 0.3;
$nilai_uas = $uas * 0.35;
$nilai_tugas = $tugas * 0.35;

$nilai_akhir = $nilai_tugas + $nilai_uas + $nilai_uts;






if($nilai_akhir > 55){
 $keterangan = 'Lulus';
} 
else{
 $keterangan = 'Tidak Lulus';
}

if($nilai_akhir >= 0 and $nilai_akhir <=35){
    $grade = 'E';
}
elseif($nilai_akhir >=36 and $nilai_akhir <= 55){
    $grade = 'D';
}
elseif($nilai_akhir >=56 and $nilai_akhir <= 70){
    $grade = 'C';
}
elseif($nilai_akhir >=71 and $nilai_akhir <= 85){
    $grade = 'B';
}
elseif($nilai_akhir >=86 and $nilai_akhir <= 100){
    $grade = 'A';
}
else{
    $grade = 'I';
}


switch($grade){
    case "E":
    $predikat = "Sangat Kurang";
    break;

    case "D" :
        $predikat = "Kurang";
        break;
    
    case "C" :
        $predikat = "Cukup";
        break;

    case "B" :
        $predikat = "Baik";
        break;

    case "A" :
        $predikat = "Sangat Baik";
        break;
    default  : 
        $predikat = "Tidak Ada";
    
}
    



echo 'Nama Mahasiswa :  ' .$nama;
echo '<br> Mata Kuliah  :  ' .$matkul;
echo '<br> Nilai UTS  :  ' .$uts;
echo '<br> Nilai UAS  :  ' .$uas;
echo '<br> Nilai Tugas Dan Praktikum :  ' .$tugas;
echo '<br> Nilai Akhir :  ' .$nilai_akhir;
echo '<br> Grade :  ' .$grade;
echo '<br> Predikat :  ' .$predikat;
echo '<br> Keterangan :  ' .$keterangan;



?>
<?php endif ?>