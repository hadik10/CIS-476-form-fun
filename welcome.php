<?php

$name = $_POST["name"];
$count = $_POST["count"];
$sentence = $_POST["sentence"];
$displayOption = $_POST["displayOption"];

if ($displayOption == "vowelsOnly") {
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $name = str_split($name);
    $filteredName = "";
    foreach ($name as $char) {
        if (in_array($char, $vowels)) {
            $filteredName .= $char;
        }
    }
    $name = $filteredName;
}

echo "<h2>Displaying Name</h2>";
for ($i = 0; $i < $count; $i++) {
    echo "$name<br>";
}
echo "<br><h2>Sentence and Display Option</h2>";
echo "Sentence: $sentence<br>";
echo "Display Option: $displayOption<br>";
?>