<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>
    <style>
        .container {
            border: 1px solid black;
            width: 220px;
            padding: 10px;
            margin: 50px auto;
            text-align: left;
        }
        .container input[type="text"] {
            width: 57%;
            padding: 5px;
            margin: 10px 0;
            border: 1px solid;
        }
        .container input[type="button"] {
            background-color: green;
            color: white;
            padding: 10px 20px;
            float:right;
        }
        .instruction {
            color: green;
            clear:both;
        }
        .message.error {
            color: red;
            clear:both;
        }
        .message.verified {
            color: green;
            clear:both;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="verify_ajax.js"></script>
</head>
<body>
    <div class="container">
        <form id="usernameForm">
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" required>
            <div>
                <input type="button" id="submitBtn" value="Submit">
            </div>
        </form>
        <p class="instruction">Key in username and click submit</p>
        <p id="message" class="message"></p>
    </div>
</body>
</html>
