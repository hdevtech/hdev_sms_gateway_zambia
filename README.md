
# HDEV SMS GATEWAY FOR ZAMBIA TELCO

### HDEV SMS. MIT license.

Use from a PHP script:


# INitiate sms
```php
include 'sms_parse.php';

//SEND SMS

hdev_sms_zm::api_id("Your Api ID");
hdev_sms_zm::api_key("Your Api Key");
$msg = hdev_sms_zm::send("SENDER ID","TELL","MESSAGE");

var_dump($msg);//to get sms server response
```
# NB
The message will be sent only to a valid phone number (numbers), written in international format e.g.260738234345. We strongly recommend using the E.164 number formatting. E.164 numbers are internationally standardized to a fifteen digit maximum length. Phone numbers are usually prefixed with + (plus sign), followed by a country code, network code and the subscriber number. Phone numbers that are not E.164 formatted may work, depending on the handset or network.

#All of our response are objects for example to access the status in response you use
```php
	$status = $result->status;
```
