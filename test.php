<?php

  
  $url = "http://data.bmkg.go.id/artikel.xml"; // tempat ngambil xml dari web service taruh disini
  $sUrl = file_get_contents($url, False); // dia akan mengambil konten dari url
  $xml = simplexml_load_string($sUrl); // variabel $xml meload string dari get content $sUrl 




echo "<p>Jumlah Data : ".$xml->jumlah_data." </p>";

  //disini saya mencoba get data untuk judul dan penulis
echo "<p>Judul : ".$xml->artikel->data->judul." </p>"; 
  echo "<p>Penulis : ".$xml->artikel->data->penulis." </p>";

?>