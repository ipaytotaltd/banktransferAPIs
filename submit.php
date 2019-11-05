<?php
session_start();
// You can call our API following curl post example
$url = "https://ipaytotal.us/api/transaction";
$redirect_url = "http://localhost:8000/return.php";
$key = "1dDOKf3b1eL3R2sWgmXOiXRVv1zahyOiOGgMjh9PDtyOn6Uo45G4lRPHXMV19ERRZ";
// Fill with real customer info
$data = [
    'api_key' => $key,
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'address' => $_POST['address'],
    'country' => $_POST['country'],
    'state' =>$_POST['state'], // if your country US then use only 2 letter state code.
    'city' => $_POST['city'],
    'zipcode' => $_POST['zipcode'],
    'email' => $_POST['email'],
    'phone_number' => $_POST['phone_number'],
    'card_type' =>$_POST['card_type'], // See your card type in list
    'amount' => $_POST['amount'],
    'currency' => $_POST['currency'],
    'redirect_url' => $redirect_url,
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER,[
    'Content-Type: application/json'
]);
$response = curl_exec($curl);
curl_close($curl);

$responseData = json_decode($response);

if($responseData->redirect_3ds_url != ''){
    header("Location: ".$responseData->redirect_3ds_url);
}else{
    echo "Something is wrong !";
}