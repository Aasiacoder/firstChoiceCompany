<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <div class="invoiceOutvoice">
            <h2 class="head2">Welcome, Manager! Streamline your invoice and outvoice management!</h2>
            <button id="invoice-btn" onclick="showInvoiceManager()" disabled>Invoice Manager</button>
            <button id="outvoice-btn" onclick="showOutvoiceManager()" disabled>Outvoice Manager</button>
        </div>

        <div class="invoiceOutvoice-img">
            <img src="../assets/images/red-car.png" class="img-images" alt="">
            <img src="../assets/images/hero-banner1.png" class="img-image" alt="">
        </div>
    </div>


    <script src="./invoiceOutvoiceScript.js"></script>
</body>

</html>