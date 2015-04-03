
<?php
require('twitteroauth/autoload.php'); // path to twitteroauth library
use Abraham\TwitterOAuth\TwitterOAuth;

$consumerkey = '';
$consumersecret = '';
$accesstoken = '';
$accesstokensecret = '';

$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

$content = $connection->post("direct_messages/new", array("text" => "si se puede !!!!", "screen_name" => "jsu_Q"));

print_r($content);
//var_dump(json_decode($content, true));


