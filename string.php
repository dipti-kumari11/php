<?php
$msg="Welcome";
echo "$msg", strlen($msg);
$line = "You are beautiful";
echo "<br>$line<br>";
echo str_word_count($line);
$stmt="<br>If the facts do not fit the theory, change the facts!!<br>";

echo $stmt;
echo str_replace("facts","truth",$stmt);
echo "<br>New Statement<br>";
function Reverse($rev){
    return strrev($rev);
}
$rev = "madam.";
echo Reverse($rev);
$num1=19;
$num2=5;
echo"<br>",($num1+$num2);
echo"<br>",($num1-$num2);
?>