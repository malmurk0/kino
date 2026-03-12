<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Układ Sali Kinowej</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="print-area">

<div class="screen">Ekran</div>

<div class="cinema-hall" id="cwel">
    <?php
    // Definicja liczby miejsc w każdym rzędzie na podstawie obrazka
    $rows = [
        1  => range(16, 1),
        2  => range(16, 1),
        3  => range(16, 1),
        4  => range(16, 1),
        5  => range(16, 1),
        6  => range(16, 1),
        7  => range(16, 1),
        8  => range(16, 1),
        9  => range(16, 1),
        10 => range(16, 1),
        11 => range(21, 1),
    ];

    $seatsId = 0;
    $labelId = 0;
    foreach ($rows as $rowNum => $seats) {
        echo "<div class='row row-$rowNum'>";

        // Numer rzędu z lewej
        echo "<div class='row-number'>$rowNum</div>";

        // Generowanie miejsc
        foreach ($seats as $seatNum) {
            if($seatNum == 7 && $rowNum == 1
                || $seatNum == 8 && $rowNum == 1
                || $seatNum == 9  && $rowNum == 1
                || $seatNum == 10  && $rowNum == 1) {
                echo "<div class='unavailableSeat' id='$seatsId++' title='Rząd $rowNum, Miejsce $seatNum'></div>";
            }

            else {
                $id = $labelId++;
                echo "<div class='seat' id='$seatsId++' title='Rząd $rowNum, Miejsce $seatNum'><label for='$id'><input class='inputClass' id='$id' type='checkbox' name='Miejsca'><span class='spanClass'>$seatNum</span></label></div>";
            }
        }

        // Numer rzędu z prawej
        echo "<div class='row-number'>$rowNum</div>";

        echo "</div>";
    }
    ?>
</div>
</div>
<button onclick="printDiv()">Drukuj</button>

<a style="border: solid black 2px;border-radius:2px;background-color: #29abe2;text-decoration: none; " href="stronaglowna.php">Strona główna</a>

</body>
<script src="druk.js"></script>
<script src="Operations.js"></script>
</html>