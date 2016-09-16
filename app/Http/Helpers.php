<?php

function createdAgo(Carbon\Carbon $dateTime) {
    $delta = time() - $dateTime->getTimestamp();
    if ($delta < 0)
        throw new \InvalidArgumentException("createdAgo is unable to handle dates in the future");

    $duration = "";
    if ($delta < 60) {
        // Seconds
        $time = $delta;
        $duration = $time . " second" . (($time > 1) ? "s" : "") . " ago";
    } else if ($delta < 3600) {
        // Mins
        $time = floor($delta / 60);
        $duration = $time . " minute" . (($time > 1) ? "s" : "") . " ago";
    } else if ($delta < 86400) {
        // Hours
        $time = floor($delta / 3600);
        $duration = $time . " hour" . (($time > 1) ? "s" : "") . " ago";
    } else if ($delta < 2592000) {
        // Days
        $time = floor($delta / 86400);
        $duration = $time . " day" . (($time > 1) ? "s" : "") . " ago";
    } else if ($delta < 31536000) {
        //Months(each month being 30 days long)
        $time = floor($delta / 2592000);
        $duration = $time . " month" . (($time > 1) ? "s" : "") . " ago";
    } else {
        $time = floor($delta / 31536000);
        $duration = $time . " year" . (($time > 1) ? "s" : "") . " ago";
    }

    return $duration;
}
