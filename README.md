
# 📊 Number Analyzer - PHP Console Application

A simple console-based PHP application that allows users to input a list of numbers and get useful statistics such as the maximum, minimum, sum, and average.

---

## 🧾 Features

- Accepts a list of numbers separated by spaces.
- Validates user input to ensure all values are numeric.
- Calculates and displays:
  - Maximum number
  - Minimum number
  - Total sum
  - Average (rounded to 2 decimal places)
- Loop-based interface: analyze multiple lists until the user chooses to exit.
- User can type `exit` anytime to quit the program.

---

## 🚀 How to Run

1. **Make sure PHP is installed** on your system.

   You can check by running:
   ```
   php -v
   ```

2. **Save the PHP file** as `number_analyzer.php`.

3. **Open your terminal**, go to the folder where the file is saved, and run:
   ```
   php number_analyzer.php
   ```

---

## 🖥️ Example Output

```
=== Welcome to Number Analyzer ===

Enter a list of numbers separated by spaces (or type 'exit' to quit): 10 20 30 40

=== Results ===
Maximum: 40
Minimum: 10
Sum: 100
Average: 25.00

Enter a list of numbers separated by spaces (or type 'exit' to quit): exit
Exiting... Goodbye!
```

---

## 🛠️ Technologies Used

- Language: PHP (CLI)
- Functions: `fgets()`, `STDIN`, `explode()`, `is_numeric()`, `array_sum()`, `max()`, `min()`, `number_format()`

---

## 📚 Learning Outcomes

- Working with PHP in a console environment.
- Taking and validating user input.
- Processing arrays and basic math operations.
- Building a loop-based, user-friendly CLI interface.

---

## 📌 Note

If `readline()` is available on your system, you can also use it instead of `fgets(STDIN)` for simpler input handling.

---

✅ Happy Coding!
