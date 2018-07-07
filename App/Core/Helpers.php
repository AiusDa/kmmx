<?php
    function startsWith(string $haystack, string $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    function endsWith(string $haystack, string $needle)
    {
        $length = strlen($needle);
        return $length === 0 ||
        (substr($haystack, -$length) === $needle);
    }
