<?php
$angka = array(31,41,59,26,41,58);
 rsort($angka);
$sort = implode(', ', $angka);
echo $sort;