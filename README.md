# iPayTotal Bank Payment API
Below is the simple API form sample.
![iPayTotal_Payment_form](https://user-images.githubusercontent.com/43794351/68205880-5cc31200-fff1-11e9-96cf-13f6489a353d.png)

## Step - 1
```php 
// You can call our API following curl post example
$url = "https://ipaytotal.us/api/transaction";
$key = "Your API Key";
// Fill with real customer info
$data = [
    'api_key' => $key,
    'first_name' => 'First Name',
    'last_name' => 'Last Name',
    'address' => 'Address',
    'country' => 'US',
    'state' => 'NY', // if your country US then use only 2 letter state code.
    'city' => 'New York',
    'zipcode' => '38564',
    'email' => 'test@gmail.com',
    'phone_number' => '+91999999999',
    'amount' => '10.00',
    'currency' => 'USD',
    'redirect_url' => 'https://www.example.com',
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

echo "<pre>";
print_r($responseData);
```
### Step - 2 - Make payment using your generated card token

```php
// You can call our API following curl post example
$url = "https://ipaytotal.solutions/api/transaction";
$key = "Your API Key";
// Fill with real customer info
$data = [
    'api_key' => $key,
    'token' => 'Your generated card token',
    'first_name' => 'First Name',
    'last_name' => 'Last Name',
    'address' => 'Address',
    'sulte_apt_no' => 'Sulte Apt No.',
    'country' => 'US',
    'state' => 'NY', // if your country US then use only 2 letter state code.
    'city' => 'New York',
    'zip' => '38564',
    'ip_address' => '192.168.168.4',
    'birth_date' => '06/12/1990',
    'email' => 'test@gmail.com',
    'phone_no' => '+91999999999',
    'card_type' => '2', // See your card type in list
    'amount' => '10.00',
    'currency' => 'USD',
    'shipping_first_name' => 'First Name',
    'shipping_last_name' => 'Last Name',
    'shipping_address' => 'Address',
    'shipping_country' => 'US',
    'shipping_state' => 'NY',
    'shipping_city' => 'New York',
    'shipping_zip' => '35656',
    'shipping_email' => 'test@gmail.com',
    'shipping_phone_no' => '+91999999999',
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

echo "&lt;pre&gt;";
print_r($responseData);
```

## Direct Payment API

```php
// You can call our API following curl post example
$url = "https://ipaytotal.solutions/api/transaction";
$key = "Your API Key";
// Fill with real customer info
$data = [
    'api_key' => $key,
    'first_name' => 'First Name',
    'last_name' => 'Last Name',
    'address' => 'Address',
    'sulte_apt_no' => 'Sulte Apt No.',
    'country' => 'US',
    'state' => 'NY', // if your country US then use only 2 letter state code.
    'city' => 'New York',
    'zip' => '38564',
    'ip_address' => '192.168.168.4',
    'birth_date' => '06/12/1990',
    'email' => 'test@gmail.com',
    'phone_no' => '+91999999999',
    'card_type' => '2', // See your card type in list
    'amount' => '10.00',
    'currency' => 'USD',
    'card_no' => '4242424242424242',
    'ccExpiryMonth' => '02',
    'ccExpiryYear' => '2020',
    'cvvNumber' => '123',
    'shipping_first_name' => 'First Name',
    'shipping_last_name' => 'Last Name',
    'shipping_address' => 'Address',
    'shipping_country' => 'US',
    'shipping_state' => 'NY',
    'shipping_city' => 'New York',
    'shipping_zip' => '35656',
    'shipping_email' => 'test@gmail.com',
    'shipping_phone_no' => '+91999999999',
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

echo "&lt;pre&gt;";
print_r($responseData);
```
