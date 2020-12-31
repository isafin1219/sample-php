<?php

function normalizeUrl($url)
{    
    //$abc = '';
    if (strpos($url, 'http://') === 0) {
        $domain = substr($url, 7);
    } else {
        $domain = $url;
    }

    if(isset($domain)) {
        echo "domain - Yes\n";        
    }

    if(isset($abc)) {
        echo "abc - No";
    }

    return "https://{$domain}";
}

echo normalizeUrl("http://hh.ru");
echo "Test";
