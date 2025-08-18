<!DOCTYPE html>
<html>
<body>

<?php
$cars =[44,56,78,99];
$sum = 0;
echo "Original array: " . implode(", ", $cars) . "<br>"; 

for ($i = 0; $i < count($cars); $i++) {
    $sum += $cars[$i];

}
echo '   Sum of the array Items: ', $sum;
?>

</body>
</html>