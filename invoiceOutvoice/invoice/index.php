<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Generator</title>
    <link rel="stylesheet" href="./invoiceStyle.css">

    <!-- Add jsPDF and html2canvas before your script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

</head>
<body>

    <div class="container">
        <h2>Generate Invoice</h2>

        <form id="invoiceForm">
            <label>Client Name:</label>
            <input type="text" id="clientName" required>

            <label>Address:</label>
            <input type="text" id="clientAddress" required>

            <label>Service:</label>
            <input type="text" id="service" required>

            <label>Description:</label>
            <input type="text" id="description" required>

            <label>Rate (₹):</label>
            <input type="number" id="rate" required>

            <label>Quantity:</label>
            <input type="number" id="quantity" required>

            <button type="button" onclick="generateInvoice()">Generate Invoice</button>
        </form>
    </div>

    <script src="invoiceScript.js"></script>

</body>
</html>








