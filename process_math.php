<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = escapeshellarg($_POST["input1"]);
    $input2 = escapeshellarg($_POST["input2"]);
    $operation = escapeshellarg($_POST["operation"]);

    $command = "python3 math_operations.py $input1 $input2 $operation";
    $output = shell_exec($command);

    echo "<pre>$output</pre>"; // Ensure proper formatting
    echo "<p>This result was processed on my EC2 instance with Public IP: &lt;EC2-Public-IP&gt;</p>";
    echo "<p>Access the application via Load Balancer URL: <a href='http://&lt;load-balancer-dns&gt;/math_form.php'>http://&lt;load-balancer-dns&gt;/math_form.php</a></p>";
}
?>
