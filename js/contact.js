function validateField(field)
{
    var value = field.val().trim();
    field.val(value);

    if (value != "")
    {
        field.removeClass('contact_error_field');
        return true;
    }

    field.addClass('contact_error_field');
    return false;
}

$(document).ready(function() {

    setTimeout(function() {
        //$('.alert-grey').addClass('hiddenaway');
    }, 4000);

    $(".contact_form_name").blur(function() {
        validateField($(this));
    });

    $(".contact_form_email").blur(function() {
        validateField($(this));
    });

    $(".contact_form_subject").blur(function() {
        validateField($(this));
    });

    $(".contact_form_content").blur(function() {
        validateField($(this));
    });


    $('#contactForm').submit(function(event) {
        var allPass = true;

        if (!validateField($(".contact_form_name")))
        {
            allPass = false;
        }

        if (!validateField($(".contact_form_email")))
        {
            allPass = false;
        }

        if (!validateField($(".contact_form_subject")))
        {
            allPass = false;
        }

        if (!validateField($(".contact_form_content")))
        {
            allPass = false;
        }

        if (!allPass)
        {
            $('.contact_form_error_message').removeClass('hiddenaway');
            event.preventDefault();
            return false;
        }

        $('.contact_form_error_message').addClass('hiddenaway');
        return true;
    });
});