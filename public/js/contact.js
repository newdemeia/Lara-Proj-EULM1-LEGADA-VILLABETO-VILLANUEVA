document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');

    if (!form) return;

    const status = document.getElementById('form-status');

    const fields = ['name', 'email', 'subject', 'message'];

    function showError(fieldName, message) {
        const field = document.getElementById(fieldName);
        const error = document.getElementById(fieldName + '-error');

        if (field) {
            field.classList.toggle('invalid', Boolean(message));
            field.setAttribute('aria-invalid', String(Boolean(message)));
        }

        if (error) {
            error.textContent = message;
        }
    }

    fields.forEach(function (fieldName) {
        const field = document.getElementById(fieldName);

        if (!field) return;

        field.addEventListener('input', function () {
            showError(fieldName, '');

            status.className = 'form-status';
            status.textContent = '';
        });

        field.addEventListener('change', function () {
            showError(fieldName, '');
        });
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value.trim();

        const errors = {
            name: name.length < 2
                ? 'Enter your name using at least 2 characters.'
                : '',

            email: !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
                ? 'Enter a valid email address.'
                : '',

            subject: !subject
                ? 'Please select an inquiry subject.'
                : '',

            message: message.length < 10
                ? 'Your message must contain at least 10 characters.'
                : ''
        };

        let valid = true;

        fields.forEach(function (fieldName) {
            showError(fieldName, errors[fieldName]);

            if (errors[fieldName]) {
                valid = false;
            }
        });

        if (!valid) {
            status.className = 'form-status error';
            status.textContent =
                'Please correct the highlighted fields before continuing.';

            const firstInvalid = form.querySelector('[aria-invalid="true"]');

            if (firstInvalid) {
                firstInvalid.focus();
            }

            return;
        }

        status.className = 'form-status success';
        status.textContent =
            'Validation successful! This demonstration form does not send or store your inquiry.';

        form.reset();

        fields.forEach(function (fieldName) {
            showError(fieldName, '');
        });
    });
});
