<?php
$nilai = [80, 78, 72, 84, 92, 88];
$nilaiawal = $nilai;
$nilaitertinggi = max($nilai);
$nilaiterendah = min($nilai);
asort($nilai);
arsort($nilai);

$nilairata_rata = round(array_sum($nilai) / count($nilai));
$key = array_search(72, $nilaiawal);
if ($key !== false) {
    $nilaiperbaikan = $nilaiawal;
    $nilaiperbaikan[$key] = 75;
}

$remed = $nilaiperbaikan;
arsort($nilaiperbaikan);

echo "Nilai saya: " . implode(", ", $nilaiawal) ;
echo "<br>"; 
echo "Dari keseluruhan nilai yang paling tinggi ialah : $nilaitertinggi";
echo "<br>";
echo "Sedangkan nilai yang paling kecil : $nilaiterendah";
echo "<br>";
echo "Apabila diurutkan dari yang terkecil menjadi : " . implode(", ", array_reverse($nilai)) ;
echo "<br>";
echo "Apabila diurutkan dari yang terbesar menjadi : " . implode(", ", $nilai);
echo "<br>";
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : $nilairata_rata";
echo "<br>";
echo "Setelah melakukan perbaikan untuk nilai $nilaiterendah, saya mendapat nilai 75. Jadi nilai saya sekarang : " . implode(", ", $remed);
?>