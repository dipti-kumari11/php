<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table Generator</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Multiplication Table Generator</h2>

    <form method="POST">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);

        if ($number > 0) {
            echo "<h3>Multiplication Table for $number:</h3>";
            echo "<table>";
            echo "<tr><th>Multiplier</th><th>Result</th></tr>";
            
            for ($i = 1; $i <= 10; $i++) {
                $result = $number * $i;
                echo "<tr><td>$number x $i</td><td>$result</td></tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Please enter a valid positive number.</p>";
        }
    }
    ?>

</body>
</html>

