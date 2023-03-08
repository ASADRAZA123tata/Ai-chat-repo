<?php
require __DIR__.'/vendor/autoload.php';
use Orhanerday\OpenAi\OpenAi;
$open_ai_key = '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';
$open_ai = new OpenAi($open_ai_key);
$prompt = $_POST["prompt"];
$complete = $open_ai->completion([
    'model' => 'text-davinci-003',
    'prompt' => 'Writing 3 marketing Facebook caption for '.$prompt,
    'temperature' => 0.9,
    'max_tokens' => 150,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6
]);
$response = json_decode($complete,true);
$response  =  $response["choices"][0]["text"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Ai</title>
</head>
<body>
    <h1>Out Put of 3 Facebook Marketing Captions for<?php $prompt; ?></h1>
    <div class="output-text">
    <?= 
    print_r($response);
    ?>
    </div>
</body>
</html>