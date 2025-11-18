<?php
function my_str_contains($haystack, $needle) {
    $haystackLength = strlen($haystack);
    $needleLength = strlen($needle);

    if ($needleLength === 0 || $needleLength > $haystackLength) {
        return false;
    }

    for ($i = 0; $i <= $haystackLength - $needleLength; $i++) {
        $match = true;
        for ($j = 0; $j < $needleLength; $j++) {
            if (!isset($haystack[$i + $j]) || $haystack[$i + $j] !== $needle[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            return true;
        }
    }

    return false;
}
