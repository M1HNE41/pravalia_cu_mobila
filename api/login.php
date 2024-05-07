<?php

$dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
or die('Could not connect: ' . pg_last_error());
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
function ipToConcatenatedString($ip) {
    // Remove dots from the IP address
    $ipWithoutDots = str_replace('.', '', $ip);

    return $ipWithoutDots;
}

if (isset($_POST['save'])) {
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];


    // Prepare SQL statement
    $sql = "SELECT * FROM users WHERE username = $1 AND password = $2";
    $stmt = pg_prepare($dbconn, "auth_query", $sql);

    // Execute prepared statement with user inputs as parameters
    $result = pg_execute($dbconn, "auth_query", array($newUsername, $newPassword));


    if (pg_num_rows($result) > 0) {
        // Authentication successful

        $sessionId = ipToConcatenatedString(get_client_ip());
        // Retrieve user ID from the PostgreSQL table
        $getUserSql = "SELECT id FROM users WHERE username = '$newUsername'";
        $userResult = pg_query($dbconn, $getUserSql);
        $userData = pg_fetch_assoc($userResult);
        $userId = $userData['id'];

        // Update the PostgreSQL row in the sessions table
        $updateSql = "INSERT INTO sessions (session_id, user_id, is_active) VALUES ('$sessionId', '$userId', true)";
        $updateResult = pg_query($dbconn, $updateSql);

        if ($updateResult) {
            // Row updated successfully

            // Redirect to the user's dashboard or another page
            header('Location: /home');
            exit;
        } else {
            // Handle error
            echo "Error updating PostgreSQL row: " . pg_last_error($dbconn);
        }
    }
    else{
        echo "Invalid username or password";
    }
        
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectare</title>
    <div class="relative">
    <div id="logo">
    <a href="/home">
      <img src="https://piasuguypoushrpezbmu.supabase.co/storage/v1/object/sign/products/logo.png?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJwcm9kdWN0cy9sb2dvLnBuZyIsImlhdCI6MTcwODYzNjAwNCwiZXhwIjozMTU1Mjc3MTAwMDA0fQ.eFwp7a94N-8GmvY0gGljf3OpE5llbVJL6BmgMMPhwFU&t=2024-02-22T21%3A06%3A45.022Z" alt="logo" width="400px" height="95px">
      </a>
  </div>
  </div>
    <?php include 'style/login-css.php';?>
</head>
<body>
    <div class="container">
        <h2>Conectare</h2>
        <form action="/login" method="post">
            <div class="input-group">
                <label for="username">Nume de utilizator:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Parola:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="save" value="Submit">Conectare</button>
        </form>
        <p>Nu ai cont? <a href="/signup">Inregistreaza-te</a></p>
    </div>
</body>
</html>


