<?php
// initiate the memcached instance
$cache = new \Memcached();
$cache->addServer('127.0.0.1', '11211');

// get all stored memcached items

$keys = $cache->getAllKeys();
foreach($keys as $key) {
	$value = $cache->get($key);
	print "$value\n";
}
?>
