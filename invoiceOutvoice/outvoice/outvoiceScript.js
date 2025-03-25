document.addEventListener("DOMContentLoaded", function () {

    function printOutvoice() {
        window.print();
    }

    function downloadOutvoice() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        html2canvas(document.getElementById("print-area")).then((canvas) => {
            const imgData = canvas.toDataURL("image/png");
            const imgWidth = 190;
            const imgHeight = (canvas.height * imgWidth) / canvas.width;
            doc.addImage(imgData, "PNG", 10, 10, imgWidth, imgHeight);
            doc.save("Outvoice.pdf");
        });
    }

    window.printOutvoice = printOutvoice;
    window.downloadOutvoice = downloadOutvoice;
});


