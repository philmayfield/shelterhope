<?php
session_start();
require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "shelterhopepets";
$notweets = 3;
$consumerkey = "zpnlhvsTNM9WZhZIjAmdxcoUZ";
$consumersecret = "1iQVSRfvAfFRM9GPzVOsU3syWGzCCS1pQi6vMRh7nxaN91tWgo";
$accesstoken = "111793986-0khICDpBZvAZrjsem3Oh4GeIFdFazIS6bC13GlOw";
$accesstokensecret = "lzPB3vt7hSxl8UuR36yMPfj6yGJ3RJ82q2h0ZWtxWVH8t";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>