
<?php
$superhero = array(
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
    "age" => 18
);
$city =array(
    "name" => "new york"
);

// Adding more elements to the superhero array
$superhero["superpower"] = "Spider Sense";
$superhero["city"] = "New York";

// Loop through superhero array 
foreach ($superhero as $key => $value) {
    echo "key: $key, value: $value <br>";
}
?>
