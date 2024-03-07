<?php
    $nilai = 70; 

    $kompeten = ($nilai >= 75) ? 'Kompeten' : 'Belum Kompeten';
    $color = ($nilai >= 75) ? 'green' : 'red';

    echo "Nilai kompetensi: {$nilai} <span style='color: {$color};'>($kompeten)</span>"; 
?>

