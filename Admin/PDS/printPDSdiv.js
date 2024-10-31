
function printDiv(divName) {
    var printContents = document.getElementById(divName);

    if (printContents) {
        // Hide unwanted elements
        var elementsToHide = document.querySelectorAll('body > *:not(#' + divName + ')');
        elementsToHide.forEach(function(element) {
            element.style.display = 'none';
        });

        // Print the content
        window.print();

        // Restore visibility of hidden elements
        elementsToHide.forEach(function(element) {
            element.style.display = '';
        });
    } else {
        console.error("Div element with id '" + divName + "' not found.");
    }
}



// function printDiv(divName) {
//     var printContents = document.getElementById(divName);

//     if (printContents) {
//         var originalContents = document.body.innerHTML;

//         document.body.innerHTML = printContents.outerHTML;

//         window.print();

//         document.body.innerHTML = originalContents;
//     } else {
//         console.error("Div element with id '" + divName + "' not found.");
//     }
// }