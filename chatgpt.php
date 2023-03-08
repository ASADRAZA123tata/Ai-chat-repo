<?php
// Get the user input
$input = $_POST['input'];

// Set the API endpoint and parameters
$url = 'https://api.openai.com/v1/engines/davinci-codex/completions';
$data = array(
    'prompt' => $input,
    'max_tokens' => 150,
    'n' => 1,
    'stop' => "\n"
);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\nAuthorization: Bearer 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",
        'method'  => 'POST',
        'content' => json_encode($data)
    )
);

// Send the API request and get the response
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

// Return the response to the client
echo $response;
?>
