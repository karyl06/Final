```javascript id="vr9l0d"
// Bootstrap Form Validation

(() => {
    'use strict';

    // Select all forms with validation
    const forms = document.querySelectorAll('.needs-validation');

    // Loop through each form
    Array.from(forms).forEach(form => {

        form.addEventListener('submit', event => {

            // If form is invalid
            if (!form.checkValidity()) {

                // Stop submission
                event.preventDefault();
                event.stopPropagation();
            }

            // Add Bootstrap validation styles
            form.classList.add('was-validated');

        }, false);

    });

})();
```
