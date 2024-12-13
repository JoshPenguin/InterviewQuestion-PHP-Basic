$(document).ready(function () {
    $('#submitBtn').click(function () {
        $('.instruction').hide();

        const username = $('#username').val().trim();

        if (username === '') {
            $('#message').text('Username is required').addClass('error').removeClass('verified');
            return;
        }

        $.ajax({
            url: 'info.php',
            type: 'POST',
            data: { username: username },
            success: function (response) {
                if (response === 'Verified') {
                    $('#message').text('Verified').addClass('verified').removeClass('error');
                } else {
                    $('#message').text('Error').addClass('error').removeClass('verified');
                }
            },
            error: function () {
                $('#message').text('Error: Unable to process request').addClass('error').removeClass('verified');
            }
        });
    });
});