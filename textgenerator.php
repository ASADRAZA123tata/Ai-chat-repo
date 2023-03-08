<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OPEN AI API</title>
</head>
<body>
    <div>
        <h1>Writing 3 Facebook Marketing captions for</h1>
    </div>
     <div>
        <form action="ai.php" method="POST">
            <div><input type="text" name="prompt" placeholder ="shoe,burger,etc"/></div>
            <br>
            <div><input type="submit" value="Generate" /></div>
        </form>
     </div>
     <hr>
     <div>
        <h1>Image Generation By AI</h1>
    </div>
     <div>
        <form action="image.php" method="POST">
            <div><input type="text" name="prompt" placeholder ="shoe,burger,etc"/></div>
            <br>
            <div><input type="submit" value="Generate Image" /></div>
        </form>
     </div>
    <?php
    
    ?>
    
</body>
</html>