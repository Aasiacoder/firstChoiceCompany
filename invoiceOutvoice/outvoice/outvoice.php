<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Generated Outvoice</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="outvoiceStyle.css">

</head>

<body style="height: 100vh;">

<div class="outvoice-box">

    <div class="outvoice-wrapper" id="print-area">
        <div class="outvoice">
            <div class="outvoice-container">
                <div class="outvoice-head">
                    <div class="outvoice-head-top">
                        <div class="outvoice-head-top-right text-end">
                            <h3>Outvoice</h3>
                        </div>
                        <div class="outvoice-head-top-left text-start">
                            <img src="../../assets/images/logo.png">
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="outvoice-head-middle">
                        <div class="outvoice-head-middle-left text-start">
                            <p><span class="text-bold">Date:</span> 10/3/2025</p>
                        </div>
                        <div class="outvoice-head-middle-right text-end">
                            <p>
                                <span class="text-bold">Outvoice No:</span> 56789
                            </p>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="outvoice-head-bottom">
                        <div class="outvoice-head-bottom-left">
                            <ul>
                                <li class="text-bold">Supplier Name:</li>
                                <li id="supplier-name">ABC Suppliers Ltd.</li>
                                <li id="supplier-address">45 Market Street, New York</li>
                            </ul>
                        </div>
                        <div class="outvoice-head-bottom-right">
                            <ul class="text-end">
                                <li class='text-bold'>Pay To:</li>
                                <li>FirstChoice Inc.</li>
                                <li>2705 N. Enterprise</li>
                                <li>Orange, CA 89438</li>
                                <li>contact@FirstChoiceinc.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="outvoice-head-bottom">
                        <div class="outvoice-head-bottom-left">
                            <ul>
                                <li class="text-bold">Payment Terms:</li>
                                <li id="payment-terms">Net 30</li>
                            </ul>
                        </div>
                        <div class="outvoice-head-bottom-right">
                            <ul class="text-end">
                                <li class="text-bold">Due Date:</li>
                                <li id="due-date">10/4/2025</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="overflow-view">
                    <div class="outvoice-body">
                        <table>
                            <thead>
                                <tr>
                                    <td class="text-bold">Item</td>
                                    <td class="text-bold">Description</td>
                                    <td class="text-bold">Rate</td>
                                    <td class="text-bold">QTY</td>
                                    <td class="text-bold">Amount</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="outvoice-item">Item Name</td>
                                    <td id="outvoice-description">Description</td>
                                    <td id="outvoice-rate">₹0.00</td>
                                    <td id="outvoice-quantity">0</td>
                                    <td class="text-end" id="outvoice-amount">₹0.00</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="outvoice-body-bottom">
                            <div class="outvoice-body-info-item border-bottom">
                                <div class="info-item-td text-end text-bold">Sub Total:</div>
                                <div class="info-item-td text-end" id="sub-total">₹0.00</div>
                            </div>
                            <div class="outvoice-body-info-item border-bottom">
                                <div class="info-item-td text-end text-bold">Tax:</div>
                                <div class="info-item-td text-end" id="tax">₹0.00</div>
                            </div>
                            <div class="outvoice-body-info-item border-bottom">
                                <div class="info-item-td text-end text-bold">Discount (%):</div>
                                <div class="info-item-td text-end" id="discount">0%</div>
                            </div>
                            <div class="outvoice-body-info-item border-bottom">
                                <div class="info-item-td text-end text-bold">Final Payable Amount:</div>
                                <div class="info-item-td text-end" id="final-payable">₹0.00</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="outvoice-foot text-center">
                    <p><span class="text-bold text-center">NOTE:&nbsp;</span>This is a computer-generated outvoice and does
                        not require a physical signature.</p>

                    <div class="outvoice-btns">
                        <button type="button" class="outvoice-btn" onclick="printOutvoice()">
                            <span>
                                <i class="fa-solid fa-print"></i>
                            </span>
                            <span>Print</span>
                        </button>
                        <button type="button" class="outvoice-btn" onclick="downloadOutvoice()">
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

    <script src="script.js"></script>

</body>
</html>