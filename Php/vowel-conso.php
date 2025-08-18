<!DOCTYPE html>
<html>
<body>

<?php
$text = "Hello World";
$vowels = "";
$consonants = "";

$text = strtolower($text); 

for ($i = 0; $i < strlen($text); $i++) {
    $ch = $text[$i];
    if ($ch >= 'a' && $ch <= 'z') {
        if (in_array($ch, ['a','e','i','o','u'])) {
            $vowels .= $ch . " ,";
        } else {
            $consonants .= $ch . " ,";
        }
    }
}

echo "Original String: " . $text . "<br>";
echo "Vowels: " . $vowels . "<br>";
echo "Consonants: " . $consonants;
?>

</body>
</html>
