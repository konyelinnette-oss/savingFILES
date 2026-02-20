# Student Marks Analyzer

A simple, dynamic PHP application designed to collect, process, and analyze student marks using various PHP control structures. This project demonstrates the practical application of loops and conditional statements in a web environment.

## 🚀 Features

* **Dynamic Input Generation**: Specify the number of students, and the app generates the required input fields using a `for` loop.
* **Comprehensive Data Processing**: Calculates totals, averages, and identifies extremes (highest/lowest marks).
* **Performance Metrics**:
* Tracks students scoring above 50.
* Tracks students scoring below 40.


* **Class Grading**: Automatically categorizes the overall class performance based on the calculated average.

---

---

## 🛠️ Technical Implementation

The application showcases the three primary types of loops in PHP:

| Loop Type | Purpose in this Project |
| --- | --- |
| **`for`** | Used to dynamically generate the exact number of HTML input fields requested by the user. |
| **`foreach`** | Iterates through the submitted marks array to calculate the sum and identify high/low scores. |
| **`while`** | Utilized to wrap and display the final summary data. |

### Logic Flow

The app uses `if-elseif-else` logic to determine the final class status:

* **Excellent Class**: Average 
* **Average Performance**: Average between 50 and 74
* **Needs Improvement**: Average 

## 📂 How to Use

1. **Environment**: Ensure you have a PHP server environment installed (like XAMPP, WAMP, or MAMP).
2. **Setup**: Save the code as `index.php` in your server's root directory (e.g., `htdocs`).
3. **Execution**:
* Open your browser and navigate to `localhost/your-folder-name/`.
* Enter the number of students you wish to grade.
* Fill in the marks (0-100) for each student.
* Click **Analyze Marks** to view the results.



## 📊 Sample Output

Upon submission, the tool provides:

* A list of all entered marks.
* **Total Marks** and **Class Average**.
* **Highest** and **Lowest** individual scores.
* Counts for specific performance thresholds (Above 50 / Below 40).

---

Would you like me to add a section on how to style this with CSS to make the analyzer look more modern?
