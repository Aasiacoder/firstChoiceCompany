<!-- <php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values
    $empName = $_POST["empName"];
    $empId = $_POST["empId"];
    $location = $_POST["location"];
    $bankName = $_POST["bankName"];
    $bankAcc = $_POST["bankAcc"];
    $ifsc = $_POST["ifsc"];
    $position = $_POST["position"];
    $baseSalary = floatval($_POST["baseSalary"]);
    $pf = (floatval($_POST["pf"]) / 100) * $baseSalary;
    $df = (floatval($_POST["df"]) / 100) * $baseSalary;
    $gst = (floatval($_POST["gst"]) / 100) * $baseSalary;
    $bonus = (floatval($_POST["bonus"]) / 100) * $baseSalary;

    $netSalary = $baseSalary - $pf - $df - $gst + $bonus;

    // Generate invoice date and number
    $invoiceDate = date("d-m-Y");
    $invoiceNo = rand(10000, 99999);
} else {
    // Redirect to form if accessed directly
    header("Location: index.php");
    exit();
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Salary Invoice</title>
    <link rel="stylesheet" href="SalaryStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<div class="invoice-wrapper" id="print-area">
        <div class="invoice">
            <div class="invoice-container">
                <div class="invoice-head">
                    <div class="invoice-head-top">
                        <div class="invoice-head-top-left text-start">
                            <img src="../assets/images/logo.png">
                        </div>
                        <div class="invoice-head-top-right text-end">
                            <h3>Salary Invoice</h3>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-middle">
                        <div class="invoice-head-middle-left text-start">
                            <p><span class="text-bold">Date</span>: <span id="invoice-date"></span></p>
                        </div>
                        <div class="invoice-head-middle-right text-end">
                            <p><span class="text-bold">Invoice No:</span> <span id="invoice-no"></span></p>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-bottom">
                        <div class="invoice-head-bottom-left">
                            <ul>
                                <li class="text-bold">Employee Details:</li>
                                <li id="emp-name"></li>
                                <li id="emp-id"></li>
                                <li id="emp-location"></li>
                            </ul>
                        </div>
                        <div class="invoice-head-bottom-right">
                            <ul class="text-end">
                                <li class="text-bold">Bank Details:</li>
                                <li id="bank-name"></li>
                                <li id="bank-acc"></li>
                                <li id="ifsc-code"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="invoice-body">
                    <table>
                        <thead>
                            <tr>
                                <td class="text-bold">Component</td>
                                <td class="text-bold">Amount (₹)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Base Salary</td>
                                <td id="salary-base"></td>
                            </tr>
                            <tr>
                                <td>PF Deduction</td>
                                <td id="salary-pf"></td>
                            </tr>
                            <tr>
                                <td>DF Deduction</td>
                                <td id="salary-df"></td>
                            </tr>
                            <tr>
                                <td>GST Deduction</td>
                                <td id="salary-gst"></td>
                            </tr>
                            <tr>
                                <td>Bonus Added</td>
                                <td id="salary-bonus"></td>
                            </tr>
                            <tr class="total">
                                <td class="text-bold">Net Salary</td>
                                <td class="text-bold" id="salary-total"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="invoice-foot text-center">
                    <p><span class="text-bold">NOTE:</span> This is a computer-generated invoice and does not require a physical signature.</p>

                    <div class="invoice-btns">
                        <button type="button" class="invoice-btn" onclick="printInvoice()">
                            <span><i class="fa-solid fa-print"></i></span>
                            <span>Print</span>
                        </button>
                        <button type="button" class="invoice-btn" onclick="downloadInvoice()">
                            <span><i class="fa-solid fa-download"></i></span>
                            <span>Download</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="invoice-wrapper" id="print-area">
        <div class="invoice">
            <div class="invoice-container">
                <div class="invoice-head">
                    <div class="invoice-head-top">
                        <div class="invoice-head-top-left text-start">
                            <img src="../assets/images/logo.png">
                        </div>
                        <div class="invoice-head-top-right text-end">
                            <h3>Salary Invoice</h3>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-middle">
                        <div class="invoice-head-middle-left text-start">
                            <p><span class="text-bold">Date</span>: <?php echo $invoiceDate; ?></p>
                        </div>
                        <div class="invoice-head-middle-right text-end">
                            <p><span class="text-bold">Invoice No:</span> <?php echo $invoiceNo; ?></p>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-bottom">
                        <div class="invoice-head-bottom-left">
                            <ul>
                                <li class="text-bold">Employee Details:</li>
                                <li><?php echo $empName; ?></li>
                                <li>ID: <?php echo $empId; ?></li>
                                <li><?php echo $location; ?></li>
                            </ul>
                        </div>
                        <div class="invoice-head-bottom-right">
                            <ul class="text-end">
                                <li class="text-bold">Bank Details:</li>
                                <li><?php echo $bankName; ?></li>
                                <li>Acc: <?php echo $bankAcc; ?></li>
                                <li>IFSC: <?php echo $ifsc; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="invoice-body">
                    <table>
                        <thead>
                            <tr>
                                <td class="text-bold">Component</td>
                                <td class="text-bold">Amount (₹)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Base Salary</td>
                                <td>₹<?php echo number_format($baseSalary, 2); ?></td>
                            </tr>
                            <tr>
                                <td>PF Deduction</td>
                                <td>-₹<?php echo number_format($pf, 2); ?></td>
                            </tr>
                            <tr>
                                <td>DF Deduction</td>
                                <td>-₹<?php echo number_format($df, 2); ?></td>
                            </tr>
                            <tr>
                                <td>GST Deduction</td>
                                <td>-₹<?php echo number_format($gst, 2); ?></td>
                            </tr>
                            <tr>
                                <td>Bonus Added</td>
                                <td>+₹<?php echo number_format($bonus, 2); ?></td>
                            </tr>
                            <tr class="total">
                                <td class="text-bold">Net Salary</td>
                                <td class="text-bold">₹<?php echo number_format($netSalary, 2); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="invoice-foot text-center">
                    <p><span class="text-bold">NOTE:</span> This is a computer-generated invoice and does not require a physical signature.</p>

                    <div class="invoice-btns">
                        <button type="button" class="invoice-btn" onclick="window.print()">
                            <span><i class="fa-solid fa-print"></i></span>
                            <span>Print</span>
                        </button>
                        <button type="button" class="invoice-btn" onclick="downloadInvoice()">
                            <span><i class="fa-solid fa-download"></i></span>
                            <span>Download</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script src="salaryScript.js"></script>
</body>

</html>
