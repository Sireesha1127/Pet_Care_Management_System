<?php
    $apiKey=urlencode("AIzaSyDWzDssgD-iScqoxroJ2WjKRb_gp5d9CYo");
    $number=array("+919390374748");
    $sender=urlencode("TXLLCL");
    $message=rawurlencode("My name is Malady");
    $data=array('apikey'=>$apiKey,'numbers'=>$number,"sender"=>$sender,'message'=>$message);
    $ch=curl_init('');
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER,true);
    $response=curl_exec($ch);
    curl_close($ch);
    echo $response;




?>

<?php
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';
use Twilio\Rest\Client;

$sid    = "ACf6e3545ac1e01513f46a96ebc4e3f0b4";
$token  = "[AuthToken]";
$twilio = new Client($sid, $token);

$message = $twilio->messages
  ->create("+919390374748", // to
    array(
      "from" => "+13343262757",
      "body" => "Hey ! I am Malyadri"
    )
  );

print($message->sid);
?>