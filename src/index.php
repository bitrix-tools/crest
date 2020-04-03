<?php
require_once (__DIR__.'/crest.php');

$result = CRest::call('profile');

echo '<pre>';
	print_r($result);
echo '</pre>';
