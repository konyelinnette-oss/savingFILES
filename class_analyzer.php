<?php
// Initialize variables
$total = 0;
$average = 0;
$highest = 0;
$lowest = 0;
$above50 = 0;
$below40 = 0;
$marks = [];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Marks Analyzer</title>
</head>
<body>

<h2>Student Marks Analyzer Using PHP Loops</h2>

<?php
// STEP 1: First Form - Enter Number of Students
if (!isset($_POST['num_students']) && !isset($_POST['marks_submitted'])) {
?>

    <form method="POST">
        <label>Enter Number of Students:</label>
        <input type="number" name="num_students" min="1" required>
        <button type="submit">Generate Fields</button>
    </form>

<?php
}

// STEP 2: Generate Marks Input Fields Dynamically using FOR loop
if (isset($_POST['num_students'])) {

    $num = $_POST['num_students'];
?>

    <form method="POST">
        <input type="hidden" name="count" value="<?php echo $num; ?>">

        <?php
        // FOR LOOP (Required)
        for ($i = 1; $i <= $num; $i++) {
            echo "Student $i Marks: ";
            echo "<input type='number' name='marks[]' min='0' max='100' required><br><br>";
        }
        ?>

        <button type="submit" name="marks_submitted">Analyze Marks</button>
    </form>

<?php
}

// STEP 3: Processing Marks
if (isset($_POST['marks_submitted'])) {

    $marks = $_POST['marks'];
    $count = $_POST['count'];

    $highest = $marks[0];
    $lowest = $marks[0];

    echo "<h3>Student Marks:</h3>";

    // FOREACH LOOP (Required)
    foreach ($marks as $index => $mark) {
        echo "Student " . ($index + 1) . ": $mark <br>";
        $total += $mark;

        if ($mark > $highest) {
            $highest = $mark;
        }

        if ($mark < $lowest) {
            $lowest = $mark;
        }

        // Additional Challenge Counting
        if ($mark > 50) {
            $above50++;
        }

        if ($mark < 40) {
            $below40++;
        }
    }

    $average = $total / $count;

    echo "<hr>";

    // WHILE LOOP (Required)
    $counter = 1;
    while ($counter <= 1) {
        echo "<h3>Summary:</h3>";
        echo "Total Marks: $total <br>";
        echo "Class Average: " . number_format($average, 2) . "<br>";
        echo "Highest Mark: $highest <br>";
        echo "Lowest Mark: $lowest <br>";
        $counter++;
    }

    echo "<hr>";
    echo "<h3>Additional Analysis:</h3>";
    echo "Students scoring above 50: $above50 <br>";
    echo "Students scoring below 40: $below40 <br>";

    echo "<br><strong>Class Performance: </strong>";

    if ($average >= 75) {
        echo "Excellent Class";
    } elseif ($average < 50) {
        echo "Needs Improvement";
    } else {
        echo "Average Performance";
    }
}
?>

</body>
</html>
