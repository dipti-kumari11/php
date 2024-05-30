<!DOCTYPE html>
<html>
<head>
    <title>Array Sum Calculator</title>
</head>
<body>
    <h1>Array Sum Calculator</h1>
    <form method="post" action="">
        Enter numbers separated by commas (e.g., 1,2,3,4,5): <input type="text" name="numbers">
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        // Get the user input and split it into an array
        $input = $_POST['numbers'];
        $numberArray = explode(',', $input);

        // Initialize a variable to store the sum
        $sum = 0;

        // Loop through the array and add each element to the sum
        foreach ($numberArray as $number) {
            $sum += (int)$number; // Convert each element to an integer before adding
        }

        // Display the result
        echo "<p>The sum of ";
        echo implode(' + ', $numberArray);
        echo " is: $sum</p>";
    }
    ?>
</body>
</html>
