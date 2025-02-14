<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematical Application</title>
</head>
<body>
    <h2>Welcome to the Mathematical Application!</h2>
    <p>This application is hosted on my EC2 instance with Public IP: &lt;EC2-Public-IP&gt;</p>
    <p>Enter two numbers and select an operation to calculate the result.</p>

    <form action="process_math.php" method="POST">
        <label>Number 1:</label>
        <input type="number" name="input1" required> <br><br>

        <label>Number 2:</label>
        <input type="number" name="input2" required> <br><br>

        <label>Operation:</label>
        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select> <br><br>

        <button type="submit">[Calculate]</button>
    </form>
</body>
</html>
