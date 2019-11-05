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
### API Success Response

```php
{
    "status": "success",
    "redirect_3ds_url": "https://ipaytotal.us/transactions-3ds-page?token=YourGeneretedToken"
}  
```
### API Fail/Error Response

```php
{
    "status": "fail",
    "message": "None issuing bank"
}  
```
### API Error Validation Response

```php
{
    "status": "fail",
    "errors": {
        "first_name": [
            "The first name field is required."
        ]
    }
}  
```

## Step - 2

```php
in the step one you got "redirect_3ds_url" just redirect this url in your browser then you can see the bank's 3ds page. put on that page required details and makee your transaction. after done transaction success/declined/cancel then you can redirect bank your "redirect_url" link which you pass in step one api post request

```
