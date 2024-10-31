	

document.getElementById('saveAsPdfButton').addEventListener('click', function () {
    const element = document.getElementById('pds-table');
    const originalFontSizes = {}; // Object to store original font sizes

    
    element.querySelectorAll('.p4NeedResize').forEach(el => {
        el.style.fontSize= '8.9px';
    });
    // Reduce font size of all elements
    element.querySelectorAll('*').forEach(el => {
        originalFontSizes[el.id] = window.getComputedStyle(el).fontSize;
        let currentSize = parseFloat(originalFontSizes[el.id]);
        el.style.fontSize = (currentSize - 0.9) + 'px';
        el.style.margin = '0';
        el.style.padding = '0.01';
    });

    // Specifically target elements with the class 'address_LowPart'
    element.querySelectorAll('.address_LowPart').forEach(el => {
        el.style.borderTop = '3px solid gray';
    });

    // Hide specific row
    const rowToHide = document.getElementById('rowofPindotanNgPage');
    if (rowToHide) {
        rowToHide.style.display = 'none';
    }

  
   

    const opt = {
        margin: 3,
        filename: 'downloaded_pdf.pdf',
        html2canvas: { scale: 5 },
        jsPDF: { unit: 'mm', format: 'legal', orientation: 'portrait' }
    };
    
    html2pdf().from(element).set(opt).save();

    setTimeout(function() {
        location.reload();
    }, 3000);
});






















		
	// 			document.getElementById('saveAsPdfButton').addEventListener('click', function () {
    //     const element = document.getElementById('pds-table');
    //     html2pdf(element);
    // });	

	
// 	document.getElementById('saveAsPdfButton').addEventListener('click', function () {
//     const element = document.getElementById('pds-table');
//     const originalFontSizes = {}; // Object to store original font sizes

//     // Reduce font size of all elements inside the contentToSave element by 1.5px
//     element.querySelectorAll('*').forEach(el => {
//         // Store original font size
//         originalFontSizes[el.id] = window.getComputedStyle(el).fontSize;

//         // Reduce font size
//         let currentSize = parseFloat(originalFontSizes[el.id]);
//         el.style.fontSize = (currentSize - 1.6) + 'px';
//     });

//     // Adjust width and height of the element to fit on one page
//     element.style.width = '100%'; // Set the width to 100% or any desired value
//     element.style.height = '50%'; // Set the height to auto to fit content
    
//     const opt = {
//         margin:       3,
//         filename:     'experiment_form.pdf',
//         html2canvas:  { scale: 5 }, // Adjust scale as needed
//         jsPDF:        { unit: 'mm', format: 'legal', orientation: 'portrait' }
//     };
    
//     // Save as PDF
//     html2pdf().from(element).set(opt).save();

//     // Delay page refresh to ensure download completion
//     setTimeout(function() {
//         // Refresh the page after saving the PDF
//         location.reload();
//     }, 3000); // Adjust delay time as needed (in milliseconds)
// });

















	// function exportHTML(){
    //    var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
    //         "xmlns:w='urn:schemas-microsoft-com:office:word' "+
    //         "xmlns='http://www.w3.org/TR/REC-html40'>"+
    //         "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
    //    var footer = "</body></html>";
    //    var sourceHTML = header+document.getElementById("pds-table").innerHTML+footer;
       
    //    var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
    //    var fileDownload = document.createElement("a");
    //    document.body.appendChild(fileDownload);
    //    fileDownload.href = source;
    //    fileDownload.download = 'document.doc';
    //    fileDownload.click();
    //    document.body.removeChild(fileDownload);
    // }
