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

if operation == "add":
    result = num1 + num2
elif operation == "sub":
    result = num1 - num2
elif operation == "mul":
    result = num1 * num2
elif operation == "div":
    if num2 == 0:
        error_message = "Error: Division by zero is not allowed."
    else:
        result = num1 / num2
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
    print(f"<h2>Result: {result}</h2>")
print("</body></html>")
