<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forum Game - Mobile Legends</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Selamat Datang di Forum Game Mobile Legends</h1>
    <img src="mlbb.jpg" alt="Mobile Legends" width="400">
    <p><strong>Apa itu Mobile Legends?</strong></p>
    <p>Mobile Legends: Bang Bang adalah game MOBA 5v5 yang sangat populer di perangkat mobile. Tujuannya adalah menghancurkan turret musuh dan mempertahankan markas sendiri.</p>

    <p><strong>Tutorial Jago Main Mobile Legends:</strong></p>
    <ul>
        <li>Pahami role kamu (Tank, Marksman, Mage, dll)</li>
        <li>Pelajari setiap hero dan kemampuannya</li>
        <li>Gunakan emblem dan build yang tepat</li>
        <li>Main bareng tim dan jangan egois</li>
        <li>Selalu perhatikan map!</li>
    </ul>

    <p><strong>Diskusi Pemain:</strong></p>
    <p><em>Pemain A:</em> Hero favorit gue sih Hayabusa, karena bisa split push dan kabur gampang.</p>
    <p><em>Pemain B:</em> Gue sih suka main Tank. Kalo tim gak ada Tank, biasanya auto kalah!</p>

    <a href="logout.php">Logout</a>
</body>
</html>