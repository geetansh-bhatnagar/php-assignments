<?php

libxml_use_internal_errors(true);

$rss_feed = simplexml_load_string("https://timesofindia.indiatimes.com/rssfeeds/-2128936835.cms");


echo "<pre>";
print_r($rss_feed);
echo "</pre>";
?>