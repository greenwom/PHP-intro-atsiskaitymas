<?php
////1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)
//function composition($numbers):int {
//    $sum = 0;
//    foreach($numbers as $number) {
//        if($number % 2 == 0) {
//            $sum += $number;
//        }
//    }
//    return $sum;
//}
//$numbers = [
//    15,
//    55,
//    66,
//    91,
//    100,
//    995,
//    17,
//    550,
//];
//echo composition($numbers);


////2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)
//function multiplikation($numbers):int {
//    $multi = 1;
//    foreach($numbers as $multiArray) {
//        foreach($multiArray as $number) {
//            $multi *= $number;
//        }
//    }
//    return $multi;
//}
//$numbers = [
//    [1, 3, 5],
//    [55, 87, 100],
//    [12],
//    [],
//];
//
//echo multiplikation($numbers);
//var_dump(multiplikation($numbers));



////3.     Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
////Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
////      Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)
////
////      Destination "Paris".
////Titles: "Romantic Paris", "Hidden Paris"
////      Total: 99500
////************
////      Destination "New York"
////      ...
//$holidays = [
//    [
//        'title' => 'Romantic Paris',
//        'destination' => 'Paris',
//        'price' => 1500,
//        'tourists' => 55,
//    ],
//    [
//        'title' => 'Amazing New York',
//        'destination' => 'New York',
//        'price' => 2699,
//        'tourists' => 21,
//    ],
//    [
//        'title' => 'Spectacular Sydey',
//        'destination' => 'Sydey',
//        'price' => 4130,
//        'tourists' => 9,
//    ],
//    [
//        'title' => 'Hidden Paris',
//        'destination' => 'Paris',
//        'price' => 1700,
//        'tourists' => 10,
//    ],
//    [
//        'title' => 'Emperors of the past',
//        'destination' => 'Beijing',
//        'price' => null,
//        'tourists' => 10,
//    ],
//];
//
//$destinationSummaries = [];
//foreach ($holidays as $holiday) {
//    if ($holiday['price'] === null) {
//        continue;
//    }
//    $destination = $holiday['destination'];
//    if (!isset($destinationSummaries[$destination])) {
//        $destinationSummaries[$destination] = [
//            'destination' => $destination,
//            'titles' => [],
//            'totalPaid' => 0,
//        ];
//    }
//    $destinationSummaries[$destination]['titles'][] = $holiday['title'];
//    $destinationSummaries[$destination]['totalPaid'] += $holiday['price'] * $holiday['tourists'];
//}
//
//foreach ($destinationSummaries as $destinationSummary) {
//    echo "Destination: {$destinationSummary['destination']}\n";
//    echo "Titles: " . implode(', ', $destinationSummary['titles']) . "\n";
//    echo "Total: {$destinationSummary['totalPaid']}\n";
//    echo "************\n";
//}


////4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1.5 balas)
//$holidays = [
//    [
//        'title' => 'Romantic Paris',
//        'destination' => 'Paris',
//        'price' => 1500,
//        'tourists' => 55,
//    ],
//    [
//        'title' => 'Amazing New York',
//        'destination' => 'New York',
//        'price' => 2699,
//        'tourists' => 21,
//    ],
//    [
//        'title' => 'Spectacular Sydey',
//        'destination' => 'Sydey',
//        'price' => 4130,
//        'tourists' => 9,
//    ],
//    [
//        'title' => 'Hidden Paris',
//        'destination' => 'Paris',
//        'price' => 1700,
//        'tourists' => 10,
//    ],
//    [
//        'title' => 'Emperors of the past',
//        'destination' => 'Beijing',
//        'price' => null,
//        'tourists' => 10,
//    ],
//];
//
//$destinationSummaries = [];
//foreach ($holidays as $holiday) {
//    if ($holiday['price'] === null) {
//        continue;
//    }
//    $destination = $holiday['destination'];
//    if (!isset($destinationSummaries[$destination])) {
//        $destinationSummaries[$destination] = [
//            'destination' => $destination,
//            'titles' => [],
//            'totalPaid' => 0,
//        ];
//    }
//    $destinationSummaries[$destination]['titles'][] = $holiday['title'];
//    $destinationSummaries[$destination]['totalPaid'] += $holiday['price'] * $holiday['tourists'];
//}
//$output = "";
//foreach ($destinationSummaries as $destinationSummary) {
//    $output .= "Destination: {$destinationSummary['destination']}\n";
//    $output .= "Titles: " . implode(', ', $destinationSummary['titles']) . "\n";
//    $output .= "Total: {$destinationSummary['totalPaid']}\n";
//    $output .= "***********\n";
//}
//
////file_put_contents('ketvirta.txt', $output, FILE_APPEND); // užkrauna kas sykį
//file_put_contents('ketvirta.txt', $output );


////5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)
//$recipe = file_get_contents("receptas.txt");
//echo $recipe;

//// 5. Užduotis dar sykį :P
//$teorija = file_get_contents("teorijosAtsiskaitymas.txt");
//echo $teorija;

////6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų ir juos sudaugintų tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
//function calculate() {
//    $var1 = readline("Paduok pirmą argumentą: ");
//    $var2 = readline("Paduok antrą argumentą: ");
//    if (!is_numeric($var1) || !is_numeric($var2)) {
//        echo "Error: Sorriukas, abu argumentai turi būti skaičiai.";
//        return;
//    }
//    $result = ($var1 * $var2) ** 2;
//    echo $result;
//}
//calculate();

