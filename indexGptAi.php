<!DOCTYPE html>
<html>
<head>
    <title>ChatGPT API Integration</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>ChatGPT API Integration</h1>
    <input type="text" id="input">
    <button id="submit">Submit</button>
    <br><br>
    <div id="response"></div>
    <script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var input = $('#input').val();
                $.ajax({
                    url: 'chatgpt.php',
                    type: 'POST',
                    data: {input: input},
                    success: function(response) {
                        $('#response').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
