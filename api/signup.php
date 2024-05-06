<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inregistrare</title>
    <div class="relative">
    <div id="logo">
    <a href="/home">
      <img src="https://piasuguypoushrpezbmu.supabase.co/storage/v1/object/sign/products/logo.png?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJwcm9kdWN0cy9sb2dvLnBuZyIsImlhdCI6MTcwODYzNjAwNCwiZXhwIjozMTU1Mjc3MTAwMDA0fQ.eFwp7a94N-8GmvY0gGljf3OpE5llbVJL6BmgMMPhwFU&t=2024-02-22T21%3A06%3A45.022Z" alt="logo" width="400px" height="95px">
      </a>
  </div>
  </div>
    <?php include 'signup-css.php';?>
</head>
<body>
    <div class="container">
        <h2>Inregistrare</h2>
        <form action="/signup" method="post">
            <div class="input-group">
                <label for="new_username">Nume de utilizator:</label>
                <input type="text" id="new_username" name="new_username" required>
            </div>
            <div class="input-group">
                <label for="new_password">Parola:</label>
                <input type="password" id="new_password" name="new_password" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="phone">Numar de telefon:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="input-group">
                <label for="first_name">Prenume:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="input-group">
                <label for="last_name">Nume:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <button type="submit" name="save" value="Submit">Inregistrare</button>
        </form>
        <p>Ai deja cont? <a href="/login">Conecteaza-te</a></p>
    </div>
</body>
</html>
<style>
    <?php include 'signup-popup.css'; ?>
</style>
<?php
$dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
or die('Could not connect: ' . pg_last_error());

if(isset($_POST['save']))
{	
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];
    $newEmail = $_POST['email'];
    $newPhoneNumber = $_POST['phone'];
    $newFirstName = $_POST['first_name'];
    $newLastName = $_POST['last_name'];

    $sql_query = "INSERT INTO users (username, password, email, phone, first_name, last_name)
    VALUES ('$newUsername', '$newPassword', '$newEmail', '$newPhoneNumber', '$newFirstName', '$newLastName')";

    $result = pg_query($dbconn, $sql_query);

    if ($result) 
    {
        include 'signup-popup.html';
    } 
    else
    {
        echo "Error: " . pg_last_error($dbconn);
    }

    pg_close($dbconn);
}
?>
