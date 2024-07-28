jQuery(document).ready(function ($) {
    const contactForm = $('#contactForm');
    const actionContactForm = contactForm.attr('action');

    contactForm.on('submit', function (e) {
        e.preventDefault();

        const formData = {
            contactName: $('#contactName').val(),
            contactEmail: $('#contactEmail').val(),
            contactSubject: $('#contactSubject').val(),
            contactMessage: $('#contactMessage').val(),
        }

        $.ajax({
            url: actionContactForm,
            type: 'POST',
            data: formData,
        }).done(function () {
            form.html('Success!')
        }).fail(function () {
            form.html('Error!')
        });
    })
})