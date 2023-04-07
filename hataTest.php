<?php

libxml_use_internal_errors(true); // hataların depolanması için etkinleştirilir

$xml = simplexml_load_file('https://www.tcmb.gov.tr/kurlar/today.xml'); //xml linki

$errors = libxml_get_errors(); // oluşan hatalar bir dizi içinde depolanır

foreach ($errors as $error) { //dizideki bütün elemanlar dönüyor
        echo "Hatanın sebebi: $error->message\n"; // hatalar ekrana yazdırılır
    }
    
?>