<?php

$dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
or die('Could not connect: ' . pg_last_error());
function get_ip() {
    $ip = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else if(isset($_SERVER['HTTP_X_FORWARDED'])){
        $ip = $_SERVER['HTTP_X_FORWARDED'];
    }else if(isset($_SERVER['HTTP_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    }else if(isset($_SERVER['HTTP_FORWARDED'])){
        $ip = $_SERVER['HTTP_FORWARDED'];
    }else if(isset($_SERVER['REMOTE_ADDR'])){
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    if( empty($ip) || $ip == '0.0.0.0' || substr( $ip, 0, 2 ) == '::' ){
        $ip = file_get_contents('https://api.ipify.org/');
        $ip = ($ip===false?$ip:'');
    }
    return $ip;
}
if (isset($_POST['save'])) {
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];

    // Authenticate the user
    $sql = "SELECT * FROM users WHERE username = '$newUsername' AND password = '$newPassword'";
    $result = pg_query($dbconn, $sql);

    if (pg_num_rows($result) > 0) {
        // Authentication successful

        $sessionId = get_ip();
        // Retrieve user ID from the PostgreSQL table
        $getUserSql = "SELECT id FROM users WHERE username = '$newUsername'";
        $userResult = pg_query($dbconn, $getUserSql);
        $userData = pg_fetch_assoc($userResult);
        $userId = $userData['id'];

        // Insert a new row into the sessions table with the generated session ID
        $insertSql = "INSERT INTO sessions (session_id, user_id, is_active) VALUES ('$sessionId', '$userId', true)";
        $insertResult = pg_query($dbconn, $insertSql)

        if ($updateResult) {
            // Row updated successfully

            // Redirect to the user's dashboard or another page
            header('Location: /home');
            exit;
        } else {
            // Handle error
            echo "Error updating PostgreSQL row: " . pg_last_error($dbconn);
        }
    } else {
        //$updateFailedSql = "UPDATE sessions SET is_active = false, user_id = null WHERE session_id = '$sessionId'";
        // Authentication failed
        //$updateFailedResult = pg_query($dbconn, $updateFailedSql);
    }
    if ($updateFailedResult) {
            // Row updated successfully

            echo "Invalid username or password";
        } else {
            // Handle error
            echo "Error updating PostgreSQL row: " . pg_last_error($dbconn);
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
      <img src="logo.png" alt="logo" width="400px" height="95px">
      </a>
  </div>
  </div>
    <style>
        /* Add the CSS styles here */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            color: #333333;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: calc(100% - 22px);
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: white;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #2980b9;
        }

        p {
            margin-top: 20px;
            font-size: 14px;
            color: #555555;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
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


