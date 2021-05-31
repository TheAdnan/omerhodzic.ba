<?php

$filename = "assets/events/events.csv";
$file = fopen($filename, "r");
$events = [];
echo '<ul>';
while (($nastup = fgetcsv($file, 1000, "|")) !== false) {
    $date = date('Y-m-d', strtotime($nastup[0]));
    if ($date > date('Y-m-d')) {
        echo '<li><p style="font-size: 40px;"><span>Datum:   ' . $nastup[0] . ' </span><span> - Grad: ' . $nastup[1] . ' </span><span> - Lokacija: ' . $nastup[2] . ' </span></p></li>';
        $events[] = $nastup;
    }
}
echo '</ul>';
fclose($file);

