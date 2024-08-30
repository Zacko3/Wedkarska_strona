<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$user_id]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profil użytkownika</title>
</head>
<body>
    <header>
        <h1>Witaj, <?php echo htmlspecialchars($user['firstname']); ?></h1>
    </header>
    <div class="container">
        <h2>Twoje Połowy</h2>
        <ul>
            <?php
            $stmt = $pdo->prepare('SELECT * FROM catches WHERE user_id = ?');
            $stmt->execute([$user_id]);
            foreach ($stmt as $catch) {
                echo "<li>{$catch['species_id']} - {$catch['weight']} kg - {$catch['length']} cm</li>";
            }
            ?>
        </ul>
        <a href="add_catch.php">Dodaj nowy połów</a>
    </div>
</body>
</html>