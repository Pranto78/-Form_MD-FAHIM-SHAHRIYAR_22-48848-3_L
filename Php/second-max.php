<!DOCTYPE html>
<html>
<body>

<?php
$numbers = [44, 56, 78, 99, 12, 85];

$max = $numbers[0];
$secondMax = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $secondMax = $max;   
        $max = $numbers[$i]; 
    } elseif ($numbers[$i] > $secondMax && $numbers[$i] != $max) {
        $secondMax = $numbers[$i]; 
    }
}

echo "Second Maximum = " . $secondMax;
?>

</body>
</html>
