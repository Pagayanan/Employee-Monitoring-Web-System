     
        // Get all divs with class "oneCheckBoxOnly"
        var checkBoxDivs = document.querySelectorAll('.oneCheckBoxOnly');

        // Function to handle checkbox behavior within a specific div
        function handleCheckboxBehavior(div) {
            var checkboxesWithinDiv = div.querySelectorAll('input[type="checkbox"]');
            
            checkboxesWithinDiv.forEach(function(checkbox) {
                checkbox.addEventListener('click', function() {
                    checkboxesWithinDiv.forEach(function(cb) {
                        if (cb !== checkbox) {
                            cb.checked = false;
                        }
                    });
                });
            });
        }
        
        // Apply checkbox behavior function to each div
        checkBoxDivs.forEach(function(div) {
            handleCheckboxBehavior(div);
        });