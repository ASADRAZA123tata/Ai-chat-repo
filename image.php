<?php
require __DIR__.'/vendor/autoload.php';
use Orhanerday\OpenAi\OpenAi;
$open_ai_key = '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';
$open_ai = new OpenAi($open_ai_key);
$prompt = $_POST["prompt"];
$complete = $open_ai->image([
    "prompt" => $prompt,
    "n" => 1,
    "size" => "256x256",
    "response_format" => "url",
 ]);
 $response = json_decode($complete,true);
// $response  =  $response["choices"][0]["text"];
// var_dump($complete);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Hear is your image Generated by AI</h1>

    </div>
    <div>
        <img src="<?=    $response["data"][0]["url"]?>"/>
    </div>
</body>
</html>