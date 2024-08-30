<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Strona Główna - Wędkarze</title>
</head>
<body>
    <header>
        <h1>Witamy na stronie Wędkarzy</h1>
        <nav>
            <a href="index.php">Strona Główna</a>
            <a href="tournaments.php">Turnieje</a>
            <a href="profile.php">Profil</a>
            <a href="login.php">Logowanie</a>
            <a href="register.php">Rejestracja</a>
        </nav>
    </header>
    <div class="container">
        <h2>Mapa Łowisk</h2>
        <div class="map">
            <img src="mapa.png" alt="Mapa Łowisk">
        </div>

        <h2>Nadchodzące Turnieje</h2>
        <ul>
            <!-- Dynamiczne wczytywanie turniejów -->
            <?php
            include 'db.php';
            $stmt = $pdo->query('SELECT * FROM tournaments ORDER BY date ASC LIMIT 5');
            foreach ($stmt as $row) {
                echo "<li>{$row['name']} - {$row['date']} - {$row['location']}</li>";
            }
            ?>
        </ul>
    </div>
    <footer>
        <p>&copy; 2024 Wędkarze. Wszystkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
