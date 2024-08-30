<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Turnieje Wędkarskie</title>
</head>
<body>
    <header>
        <h1>Nadchodzące Turnieje</h1>
        <nav>
            <a href="index.php">Strona Główna</a>
            <a href="tournaments.php">Turnieje</a>
            <a href="profile.php">Profil</a>
            <a href="login.php">Logowanie</a>
            <a href="register.php">Rejestracja</a>
        </nav>
    </header>
    <div class="container">
        <ul>
            <?php
            // Pobieranie listy turniejów z bazy danych
            $stmt = $pdo->query('SELECT * FROM tournaments ORDER BY date ASC');
            foreach ($stmt as $row) {
                echo "<li>{$row['name']} - {$row['date']} - {$row['location']} - Opłata: {$row['entry_fee']} PLN</li>";
            }
            ?>
        </ul>
    </div>
    <footer>
        <p>&copy; 2024 Wędkarze. Wszystkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
