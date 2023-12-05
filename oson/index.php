<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '{{https://api.oson.uz/api/invoice/create}}',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
      "merchant_id": 1474,
      "transaction_id": "123456789",
      "phone": "998908830450",
      "user_account": "elshodatc1116@mail.com",
      "amount": 1000.00,
      "currency": "UZS",
      "comment": "Оплата заказа №51",
      "return_url": "https://atko.tech/newonline/",
      "lifetime": 30,
      "lang": "ru"
}',
  CURLOPT_HTTPHEADER => array(
    'token: {{QZqIMDOm1ax66g5OIdg19ztSnMRZ2jDI8TgKmUWdUk9Qp3uX}}'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
