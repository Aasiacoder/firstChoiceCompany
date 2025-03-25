<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outvoice Generator</title>
    <link rel="stylesheet" href="outvoiceStyle.css">

    <!-- Add jsPDF and html2canvas before your script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

</head>
<body>
<div class="box">

    <div class="container">
        <h2>Generate Outvoice</h2>

        <form id="outvoiceForm">
            <label>Supplier Name:</label>
            <input type="text" id="supplierName" required>

            <label>Address:</label>
            <input type="text" id="supplierAddress" required>

            <label>Product/Service:</label>
            <input type="text" id="productService" required>

            <label>Description:</label>
            <input type="text" id="description" required>

            <label>Rate (₹):</label>
            <input type="number" id="rate" required>

            <label>Quantity:</label>
            <input type="number" id="quantity" required>

            <label>Payment Terms:</label>
            <input type="text" id="paymentTerms" required>

            <label>Due Date:</label>
            <input type="date" id="dueDate" required>

            <label>Discount (%):</label>
            <input type="number" id="discount" required>

            <button type="button" onclick="generateOutvoice()">Generate Outvoice</button>
        </form>
    </div>

    </div>


    <script src="script.js"></script>

</body>
</html>