<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send SMS</title>
</head>
<body>

<h1>Send an SMS</h1>

<form action="/send_sms.php" method="POST">
    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone" required>
    <br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    <br>

    <button type="submit">Send SMS</button>
</form>

</body>
</html>
