<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $species_id = $_POST['species_id'];
    $weight = $_POST['weight'];
    $length = $_POST['length'];
    $location_id = $_POST['location_id'];
    $photo = ''; // Ścieżka do zdjęcia, jeśli obsługujesz przesyłanie plików

    $stmt = $pdo->prepare('INSERT INTO catches (user_id, species_id, weight, length, location_id, photo) VALUES (?, ?, ?, ?, ?, ?)');
    if ($stmt->execute([$user_id, $species_id, $weight, $length, $location_id, $photo])) {
        header('Location: profile.php');
        exit();
    } else {
        echo "Dodawanie połowu nie powiodło się.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dodaj Połów</title>
</head>
<body>
    <header>
        <h1>Dodaj Nowy Połów</h1>
    </header>
    <div class="container">
        <form method="post" action="add_catch.php">
            <label for="species_id">Gatunek ryby:</label>
            <input type="text" id="species_id" name="species_id" required><br>

            <label for="weight">Waga (kg):</label>
            <input type="number" step="0.01" id="weight" name="weight" required><br>

            <label for="length">Długość (cm):</label>
            <input type="number" step="0.1" id="length" name="length" required><br>

            <label for="location_id">Miejsce połowu:</label>
            <input type="text" id="location_id" name="location_id" required><br>

            <button type="submit">Dodaj Połów</button>
        </form>
    </div>
</body>
</html>