<?php
// Marks for six subjects (can be replaced by user input or form)
$sub1 = $_POST["s1"];
$sub2 = $_POST["s2"];
$sub3 = $_POST["s3"];
$sub4 = $_POST["s4"];
$sub5 = $_POST["s5"];
$sub6 = $_POST["s6"];


// Calculate total and percentage
$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6;
$percentage = $total / 6;

// Determine grade
if ($percentage < 40) {
    $grade = "Failed";
} elseif ($percentage < 50) {
    $grade = "GRADE D";
} elseif ($percentage < 60) {
    $grade = "GRADE C";
} elseif ($percentage < 70) {
    $grade = "GRADE B";
} elseif ($percentage < 80) {
    $grade = "GRADE B+";
} elseif ($percentage < 90) {
    $grade = "GRADE A";
} else {
    $grade = "GRADE A+";
}

// Display result
echo "Total Marks: $total<br>";
echo "Percentage: $percentage%<br>";
echo "Grade: $grade";
?>
