<!-- <php
// session_start();
// Check if a session is not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// include '../database/auth.php'; // Include authentication check
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Maintenance System</title>
    <link rel="stylesheet" href="salaryStyle.css">
    <script src="salaryScript.js" defer></script>
</head>

<body>

    <div class="container">
        <h2>Salary Management System</h2>

        <form id="salaryForm" action="" method="">

            <div id="salaryForm-personal">
                <h3>Personal Details</h3>

                <div class="personal-section">
                    <label for="empName">Full Name:</label>
                    <input type="text" id="empName" required>
                </div>

                <div class="personal-section">
                    <label for="empId">Employee ID:</label>
                    <input type="text" id="empId" required>
                </div>

                <div class="personal-section">
                    <label for="gender">Gender:</label>
                    <select id="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="personal-section">
                    <label for="location">Location:</label>
                    <input type="text" id="location" required>
                </div>

                <div class="personal-section">
                    <label for="bankName">Bank Name:</label>
                    <input type="text" id="bankName" required>
                </div>

                <div class="personal-section">
                    <label for="bankAcc">Bank Account No.:</label>
                    <input type="text" id="bankAcc" required>
                </div>

                <div class="personal-section">
                    <label for="ifsc">IFSC Code:</label>
                    <input type="text" id="ifsc" required>
                </div>

            </div>

            <div id="salaryForm-salary">
                <h3>Salary Details</h3>

                <div class="personal-sec">
                    <label for="position">Select Position:</label>
                    <select id="position" required>
                        <option value="Manager">Manager</option>
                        <option value="HR">HR</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Employee">Employee</option>
                    </select>
                </div>

                <div class="personal-sec">
                    <label for="baseSalary">Base Salary (₹):</label>
                    <input type="number" id="baseSalary" required>
                </div>

                <div class="personal-sec">
                    <label for="pf">(PF %) :</label>
                    <input type="number" id="pf" value="12" required>
                </div>

                <div class="personal-sec"><label for="df">(DF %) :</label>
                    <input type="number" id="df" value="5" required>
                </div>

                <div class="personal-sec">
                    <label for="gst">GST (%) :</label>
                    <input type="number" id="gst" value="18" required>
                </div>

                <div class="personal-sec">
                    <label for="bonus">Bonus (%) :</label>
                    <input type="number" id="bonus" value="10" required>
                </div>

                <div class="personal-sec">
                    <button type="button" class="calculate" onclick="calculateSalary()">Calculate Salary</button>
                </div>
            </div>

        </form>

        <div id="salarySlip" class="salary-slip">
            <h3>Salary Slip</h3>
            <p><strong>Name:</strong> <span id="slip-name"></span></p>
            <p><strong>Employee ID:</strong> <span id="slip-id"></span></p>
            <p><strong>Gender:</strong> <span id="slip-gender"></span></p>
            <p><strong>Location:</strong> <span id="slip-location"></span></p>
            <p><strong>Bank Name:</strong> <span id="slip-bankName"></span></p>
            <p><strong>Account No:</strong> <span id="slip-bankAcc"></span></p>
            <p><strong>IFSC Code:</strong> <span id="slip-ifsc"></span></p>

            <p><strong>Position:</strong> <span id="slip-position"></span></p>
            <p><strong>Base Salary:</strong> ₹<span id="slip-baseSalary"></span></p>
            <p><strong>PF Deduction:</strong> ₹<span id="slip-pf"></span></p>
            <p><strong>DF Deduction:</strong> ₹<span id="slip-df"></span></p>
            <p><strong>GST Deduction:</strong> ₹<span id="slip-gst"></span></p>
            <p><strong>Bonus Added:</strong> ₹<span id="slip-bonus"></span></p>
            <h4><strong>Net Salary:</strong> ₹<span id="slip-netSalary"></span></h4>
        </div>
    </div>

    <script src="salaryScript.js"></script>
</body>

</html>
