<?php

$usia = 18;
$peringkat = 0;
$rating = 1450;
$kemenangan = 4;
$pertandingan = 18;

if ($usia>=18) {
  echo "Usia 18 tahun \n"; 
  if ($rating>1800 and $kemenangan>30) {
    echo "Mendapatkan Hadiah Spesial (Rating dan Kemenangan Tinggi";
  } elseif ($rating>=1600) {
    echo "Mendapatkan Hadiah Spesial (Rating Tinggi)";
  } elseif ($rating<=1600 and $kemenangan>=15) {
    echo "Mendapatkan Hadiah Spesial (Kemenangan Minimal 15 Kali)";
  } elseif ($rating<1400 and $kemenangan>50) {
    echo "Mendapatkan Hadiah Spesial (Kemenangan Tinggi Lebih dari 50 Kali)";
  }elseif ($rating>1400 and $rating<=1599) {
    $rasioKemenangan = ($kemenangan/$pertandingan) * 100;
      if ($rasioKemenangan > 60 ) {
        echo "Mendapatkan Hadiah Spesial (rasio kemenangan lebih dari 60%)";
      } else {
        echo "Belum layak mendapatkan hadiah (rasio kemenangan kurang dari 60%) ";
      }
   
  } else {
    echo "Belum Mendapatkan Hadiah ";
  }
} elseif ($usia>=16 and $peringkat>2000) {
  echo "Usia kurang dari 18 tahun, Peringkat tinggi \n";
  if ($rating>1800 and $kemenangan>30) {
    echo "Mendapatkan Hadiah Spesial (Rating dan Kemenangan Tinggi";
  } elseif ($rating>=1600) {
    echo "Mendapatkan Hadiah Spesial (Rating Tinggi)";
  } elseif ($rating<=1600 and $kemenangan>=15) {
    echo "Mendapatkan Hadiah Spesial (Kemenangan Minimal 15 Kali)";
  } elseif ($rating<1400 and $kemenangan>50) {
    echo "Mendapatkan Hadiah Spesial (Kemenangan Tinggi Lebih dari 50 Kali)";
  }elseif ($rating>1400 and $rating<=1599) {
    $rasioKemenangan = ($kemenangan/$pertandingan) * 100;
      if ($rasioKemenangan > 60 ) {
        echo "Mendapatkan Hadiah Spesial (rasio kemenangan lebih dari 60%)";
      } else {
        echo "Belum layak mendapatkan hadiah (rasio kemenangan kurang dari 60%) ";
      }
   
  } else {
    echo "Belum Mendapatkan Hadiah ";
  }
} elseif ($rating>1800 and $kemenangan>30) {
  echo "Mendapatkan Hadiah Spesial (Rating dan Kemenangan Tinggi)";
}else {
  echo "Anda Belum Layak mengikuti Turnamen";
}

?> 