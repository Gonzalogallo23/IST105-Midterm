<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = escapeshellarg($_POST["input1"]);
    $input2 = escapeshellarg($_POST["input2"]);
    $operation = escapeshellarg($_POST["operation"]);

    $command = "python3 math_operation.py $input1 $input2 $operation";
    $output = shell_exec($command);

    // Display the output
    echo $output;
}
?>
