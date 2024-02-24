<?php

$dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
    or die('Could not connect: ' . pg_last_error());

// Fixed session ID
$fixedSessionId = 1;

if (isset($_POST['save'])) {
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];

    // Authenticate the user
    $sql = "SELECT * FROM users WHERE username = '$newUsername' AND password = '$newPassword'";
    $result = pg_query($dbconn, $sql);

    if (pg_num_rows($result) > 0) {
        // Authentication successful

        // Check if a session already exists for this user
        $existingSessionQuery = "SELECT * FROM sessions WHERE user_id = (SELECT id FROM users WHERE username = '$newUsername')";
        $existingSessionResult = pg_query($dbconn, $existingSessionQuery);

        if (pg_num_rows($existingSessionResult) > 0) {
            // Update the existing session
            $updateSessionQuery = "UPDATE sessions SET session_id = '$fixedSessionId', is_active = true WHERE user_id = (SELECT id FROM users WHERE username = '$newUsername')";
            $updateResult = pg_query($dbconn, $updateSessionQuery);

            if ($updateResult) {
                // Session updated successfully

                // Redirect to the user's dashboard or another page
                header('Location: /home');
                exit;
            } else {
                // Handle error
                echo "Error updating session: " . pg_last_error($dbconn);
            }
        } else {
            // Insert a new row into the sessions table
            $insertSessionQuery = "INSERT INTO sessions (session_id, user_id, is_active) VALUES ('$fixedSessionId', (SELECT id FROM users WHERE username = '$newUsername'), true)";
            $insertResult = pg_query($dbconn, $insertSessionQuery);

            if ($insertResult) {
                // Session stored successfully

                // Redirect to the user's dashboard or another page
                header('Location: /home');
                exit;
            } else {
                // Handle error
                echo "Error storing session: " . pg_last_error($dbconn);
            }
        }
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }

    pg_close($dbconn);
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


