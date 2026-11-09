<?php
// 1. Pobierz aktualną godzinę (00-23)
$godzina = (int)date('H');

// 2. Warunek ustalający powitanie
if ($godzina >= 6 && $godzina < 18) {
    $powitanie = "Dzień dobry!";
} else {
    $powitanie = "Dobry wieczór!";
}

// 3. Tablica z cytatami i losowanie
$cytaty = [
    "Jutro to pierwszy czysty kartka z 365-stronicowej książki.",
    "Najlepszym sposobem na przewidzenie przyszłości jest jej stworzenie.",
    "Każdy dzień to nowa szansa, by zacząć wszystko od nowa.",
    "Programowanie to sztuka przekazywania myśli maszynie."
];

$losowyKlucz = array_rand($cytaty);
$wylosowanyCytat = $cytaty[$losowyKlucz];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamiczna Karta Powitalna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h1><?php echo $powitanie; ?></h1>
        <p class="quote">„<?php echo $wylosowanyCytat; ?>”</p>
        <button id="themeToggle">Zmień motyw</button>
        <button onclick="location.reload();">Losuj inny cytat</button>
    </div>
    <script src="script.js"></script>
</body>
</html>