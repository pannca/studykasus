<?php
   $nilai = 40;
   //kalau nilainya >=80 maka A dan lulus 
   if($nilai >= 80){
      echo "nilai A dan lulus";
   //kalau nilainya >=68 maka B dan lulus 
   }elseif($nilai >= 68){
      echo "nilai B dan lulus";
   //kalau nilainya >=56 maka C dan lulus
   }elseif($nilai >= 56){
      echo "nilai C dan lulus";
   //kalau nilainya >=45 maka D dan lulus 
   }elseif($nilai >= 45){
      echo "nilai D dan tidak lulus";
   //selainnya maka E dan lulus 
   }else{
      echo " anda tidak lulus dan dapat nilai E";
   }
   
   echo '<br>';
   

   //versi dua
   $nilai2 = 85;
   if($nilai2 >= 80){
      $nilaiMutu = "A";
      $ket = "lulus";
   }elseif($nilai2 >= 68){
      $nilaiMutu = "B";
      $ket = "Lulus";
   }elseif($nilai2 >= 56){
      $nilaiMutu = "C";
      $ket = "Lulus";
   }elseif($nilai2 >= 45){
      $nilaiMutu = "D";
      $ket = "Tidak Lulus";
   }else{
      $nilaiMutu = "E";
      $ket ="Tidak Lulus";
   }

   echo "nilai anda".$nilai2."maka mutu anda".$nilaiMutu."keterangan anda".$ket;
?>