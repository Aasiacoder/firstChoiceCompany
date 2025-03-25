<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Generated Invoice</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- style -->
    <link rel="stylesheet" href="invoiceStyle.css">


</head>

<body style="height: 170vh;">

<div class="invoice-box">

    <div class="invoice-wrapper" id="print-area">
        <div class="invoice">
            <div class="invoice-container">
                <div class="invoice-head">
                    <div class="invoice-head-top">
                        <div class="invoice-head-top-left text-start">
                            <img src="../../assets/images/logo.png">
                        </div>
                        <div class="invoice-head-top-right text-end">
                            <h3>Invoice</h3>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-middle">
                        <div class="invoice-head-middle-left text-start">
                            <p><span class="text-bold">Date</span>: 15/3/2025</p>
                        </div>
                        <div class="invoice-head-middle-right text-end">
                            <p>
                                <spanf class="text-bold">Invoice No:</span>16789
                            </p>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-bottom">
                        <div class="invoice-head-bottom-left">
                            <ul>
                                <ul>
                                    <li class="text-bold">Invoiced To:</li>
                                    <li id="client-name">Smith Rhodes</li>
                                    <li id="client-address">15 Hodges Mews, High Wycombe</li>
                                </ul>

                            </ul>
                        </div>
                        <div class="invoice-head-bottom-right">
                            <ul class="text-end">
                                <li class='text-bold'>Pay To:</li>
                                <li>FirstChoice Inc.</li>
                                <li>2705 N. Enterprise</li>
                                <li>Orange, CA 89438</li>
                                <li>contact@FirstChoiceinc.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="overflow-view">
                    <div class="invoice-body">
                        <table>
                            <thead>
                                <tr>
                                    <td class="text-bold">Service</td>
                                    <td class="text-bold">Description</td>
                                    <td class="text-bold">Rate</td>
                                    <td class="text-bold">QTY</td>
                                    <td class="text-bold">Amount</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="invoice-service">Service</td>
                                    <td id="invoice-description">Description</td>
                                    <td id="invoice-rate">₹0.00</td>
                                    <td id="invoice-quantity">0</td>
                                    <td class="text-end" id="invoice-amount">₹0.00</td>
                                </tr>
                            </tbody>

                        </table>
                        <div class="invoice-body-bottom">
                            <div class="invoice-body-info-item border-bottom">
                                <div class="info-item-td text-end text-bold">Sub Total:</div>
                                <div class="info-item-td text-end" id="sub-total">₹0.00</div>
                            </div>
                            <div class="invoice-body-info-item border-bottom">
                                <div class="info-item-td text-end text-bold">Tax:</div>
                                <div class="info-item-td text-end" id="tax">₹0.00</div>
                            </div>
                            <div class="invoice-body-info-item">
                                <div class="info-item-td text-end text-bold">Total:</div>
                                <div class="info-item-td text-end" id="total">₹0.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invoice-foot text-center">
                    <p><span class="text-bold text-center">NOTE:&nbsp;</span>This is computer generated receipt and does
                        not require physical signature.</p>

                    <div class="invoice-btns">
                        <button type="button" class="invoice-btn" onclick="printInvoice()">
                            <span>
                                <i class="fa-solid fa-print"></i>
                            </span>
                            <span>Print</span>
                        </button>
                        <button type="button" class="invoice-btn" onclick="downloadInvoice()">
                            <span>
                                <i class="fa-solid fa-download"></i>
                            </span>
                            <span>Download</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" referrerpolicy="no-referrer"></script>

    <script src="invoiceScript.js"></script>
</body>

</html>