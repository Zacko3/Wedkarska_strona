<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare('INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)');
    if ($stmt->execute([$firstname, $lastname, $email, $password])) {
        echo "Rejestracja udana! Możesz się teraz zalogować.";
    } else {
        echo "Rejestracja nie powiodła się.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rejestracja</title>
</head>
<body>
    <header>
        <h1>Rejestracja</h1>
    </header>
    <div class="container">
        <form method="post" action="register.php">
            <label for="firstname">Imię:</label>
            <input type="text" id="firstname" name="firstname" required><br>

            <label for="lastname">Nazwisko:</label>
            <input type="text" id="lastname" name="lastname" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Zarejestruj się</button>
        </form>
    </div>
</body>
</html>