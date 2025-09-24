<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = (int)$_POST['number'];
    echo "<h2>Multiplication Table for $number</h2>";

    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Row/Col</th>";
    for ($i = 1; $i <= $number; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    for ($row = 1; $row <= $number; $row++) {
        echo "<tr>";
        echo "<th>$row</th>";
        for ($col = 1; $col <= $number; $col++) {
            // Multiply row and column index
            echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    // Show the form to enter a number
    echo '<form method="POST" action="">
            <label for="number">Enter a number: </label>
            <input type="number" id="number" name="number" min="1" required>
            <input type="submit" value="Generate Table">
          </form>';
}
?>

