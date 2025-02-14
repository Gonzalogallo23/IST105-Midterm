#!/usr/bin/env python3

import sys

if len(sys.argv) != 4:
    print("Content-Type: text/html\n")
    print("<html><body><h2>Error: Missing or incorrect parameters.</h2></body></html>")
    sys.exit(1)

try:
    num1 = float(sys.argv[1])
    num2 = float(sys.argv[2])
    operation = sys.argv[3]
except ValueError:
    print("Content-Type: text/html\n")
    print("<html><body><h2>Error: Invalid number input.</h2></body></html>")
    sys.exit(1)

result = None
error_message = None
operation_text = ""

if operation == "add":
    result = num1 + num2
    operation_text = "Addition"
elif operation == "sub":
    result = num1 - num2
    operation_text = "Subtraction"
elif operation == "mul":
    result = num1 * num2
    operation_text = "Multiplication"
elif operation == "div":
    if num2 == 0:
        error_message = "Error: Division by zero is not allowed."
    else:
        result = num1 / num2
        operation_text = "Division"
else:
    error_message = "Invalid operation selected."

if result is not None:
    if result > 100:
        result *= 2
    elif result < 0:
        result += 50

print("Content-Type: text/html\n")
print("<html><body>")
if error_message:
    print(f"<h2>{error_message}</h2>")
else:
    print("<h2>Result:</h2>")
    print(f"<p>- Operation: {operation_text}</p>")
    print(f"<p>- Input 1: {num1}</p>")
    print(f"<p>- Input 2: {num2}</p>")
    print(f"<p>- Result: {result}</p>")
print("</body></html>")
