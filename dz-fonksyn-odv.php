<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

echo "<pre>";

function dnm ($dizi,$say){
   $sl = array_filter($dizi);//  boş değerleri filtreleriz .
    $randm = array_rand($sl , $say); // $randm değişkeninden diziden kaç tane anahtar seçilicek onu ayarlarız . 
        $bosdz = array_map(function($bosdger) use ($sl){ // array_map kullanarak her bir anahtar için orjinal dizi haline getirerek anahtarlara erişerek dizi haline getirir
            return $sl[$bosdger];
        } , $randm);

        return $bosdz; // diziyi döndürerek rastgele öğeleri dizi haline getirerek print_r ile sonda çaılştırırız.


}
print_r(dnm($planets,4));
?>
