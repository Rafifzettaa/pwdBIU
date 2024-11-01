<center><h2>HASIL NILAI APLIKASI PWD</h2></center>
<hr color="blue">

<?php




if(isset($_POST['submit'])){
    $nilaiUAS = $_POST['nilai'];

    if(($nilaiUAS >=85) && ($nilaiUAS <=100)){
        $grade = "A";
        $angka = "4";
        $predikat ="Sangat Baik";
    }
    elseif(($nilaiUAS >=80) && ($nilaiUAS <=84.99)){
        $grade = "A-";
        $angka = "3.67";
        $predikat ="Hampir Sangat Baik";
    }
    elseif(($nilaiUAS >=75) && ($nilaiUAS <=79.99)){
        $grade = "B+";
        $angka = "3.33";
        $predikat ="Lebih Baik";
    }
    elseif(($nilaiUAS >=70) && ($nilaiUAS <=74.99)){
        $grade = "B";
        $angka = "3.0";
        $predikat ="Baik";
    }
    elseif(($nilaiUAS >=65) && ($nilaiUAS <=69.99)){
        $grade = "B-";
        $angka = "2.67";
        $predikat ="Hampir Baik";
    }
    elseif(($nilaiUAS >=60) && ($nilaiUAS <=64.99)){
        $grade = "C+";
        $angka = "2.33";
        $predikat ="Lebih Dari Cukup";
    }
    elseif(($nilaiUAS >=55) && ($nilaiUAS <=59.99)){
        $grade = "C";
        $angka = "2.0";
        $predikat ="Cukup";
    }
    elseif(($nilaiUAS >=40) && ($nilaiUAS <=54.99)){
        $grade = "D";
        $angka = "1";
        $predikat ="Kurang";
    }
    elseif ($nilaiUAS >=39.99){
        $grade = "E";
        $angka = "0";
        $predikat ="Kurang";
    }
    else {
       echo "Invalid Value!<br>";
    }
    
}
    
    
    echo "Nilai Anda Adalah : $nilaiUAS<br>";
    echo "Grade             : $grade<br>";
    echo "Predikat          : $predikat<br>";
    echo "Angka Mutu        : $angka<br>";

   
?>

<a href="nilai.php">
        <<< INPUT LAGI</a>
            <hr color="blue">
            <marquee direction="right">
                <i>- - - Aplikasi Nilai PWD- - - </i>
                <hr color="blue">