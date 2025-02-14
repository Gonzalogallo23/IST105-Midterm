<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Operations</title>
</head>
<body>
    <h2>Math Operations Form</h2>
    <form action="process_math.php" method="POST">
        <label for="input1">Enter first number:</label>
        <input type="number" name="input1" required>

        <label for="input2">Enter second number:</label>
        <input type="number" name="input2" required>

        <label for="operation">Choose operation:</label>
        <select name="operation" required>
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>

        <button type="submit">Calculate</button>
    </form>
</body>
</html>
