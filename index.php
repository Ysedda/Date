<?php

$presentTime = new DateTime('now');
$destinationTime = new DateTime();
$destinationTime->setDate(2036, 6, 25);
$destinationTime->setTime(6, 30);
$interval = $presentTime->diff($destinationTime);

echo $presentTime->format('M d Y A h i') . "<br>";
echo $destinationTime->format('M d Y A h i') . "<br>";
echo $interval->format('Years: %Y, Months: %M, Days: %d, Hours: %h, Minutes: %M');
