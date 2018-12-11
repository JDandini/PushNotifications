<?php
// Put your device token here (without spaces):
$deviceToken = 'c91d77f951549ecdb6dca8bb69986bbba406d3f5b280dc56495adc770185c075';
// Put your private key's passphrase here:
$passphrase = 'MyPassPhrase';
// Put your alert message here:
$message = 'Usa: TESTECOL y obten $10 para iniciar con el pie derecho este día de la suerte. 🍀Pide aquí 👇';
/////////////////////////////////////////////////////////////////////
///////////
$ctx = stream_context_create();
stream_context_set_option($ctx, 'ssl', 'local_cert', 'ck.pem');
stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
stream_context_set_option($ctx, 'ssl', 'cafile', 'entrust_2048_ca.cer');
// Open a connection to the APNS server
$fp = stream_socket_client(
'ssl://gateway.sandbox.push.apple.com:2195', $err,
$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT,
$ctx);
if (!$fp)
	exit("Failed to connect: $err $errstr" . PHP_EOL);
echo 'Connected to APNS' . PHP_EOL;
// Create the payload body
$body = [
	'aps' => [
		'alert' => $message,
		'sound' => 'default',
		'content-available' => 1,
	]
];

// Encode the payload as JSON
$payload = json_encode($body);
// Build the binary notification
$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n',
strlen($payload)) . $payload;

// Send it to the server
$result = fwrite($fp, $msg, strlen($msg));
if (!$result)
	echo 'Message not delivered' . PHP_EOL;
else
	echo payload;
	echo 'Message successfully delivered' . PHP_EOL;
// Close the connection to the server
fclose($fp);
?>
