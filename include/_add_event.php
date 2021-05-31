<?php
if ($_POST['event-date']) {
    $event = [
        $_POST['event-date'],
        $_POST['event-city'],
        $_POST['event-place']
    ];

    $events[] = $event;

    $filename = "assets/events/events.csv";
    $file = fopen($filename, "w");

    foreach ($events as $event) {
        fputcsv($file, $event, '|');
    }

    fclose($file);
}
