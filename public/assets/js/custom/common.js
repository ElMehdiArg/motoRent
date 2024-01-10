


$(document).ready(function () {


    $("#newsletter-alert").slideDown(300).delay(5000).slideUp(300);


    //////////////////////////Resevation Form/////////////////////////////////////

    $('#drop-off-p').parent().hide();
    $('#checked').change(function () {
        $('#drop-off-p').attr('disabled', this.checked);
        $('#drop-off-p').parent().toggle(200);
    });



    $('#reservationModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var data = button.data('array')
        var modal = $(this)

        modal.find('.reservation-form-shadow #optionMoto').val(data.id_moto);
        $('#moto_name').text(data.marque + " " + data.modèle);
    });




    $('#pick_up_p').change(function () {
        $('#drop-off-p').val($(this).val());
        $('drop-off-p select').val($('option:selected', this).html());

    })


    $('#reservation-form').submit(function (e) {
        e.preventDefault();


        $("#email-error").text('')
        $("#phone-error").text('')
        $("#pick-p-error").text('')
        $("#drop-p-error").text('')
        $("#pick-d-error").text('')
        $("#drop-d-error").text('')
        $("#name-error").text('')
        $("#moto-error").text('')
        $("#number-error").text('')

        let id_moto = $("[name='id_moto']").val();
        let date_debut = $("[name='date_debut']").val();
        let date_fin = $("[name='date_fin']").val();
        let pick_up_p = $("[name='pick_up_p']").val();
        let drop_off_p = $("[name='drop_off_p']").val();
        let full_name = $("[name='c_full_name']").val();
        let phone = $("[name='c_phone']").val();
        let email = $("[name='c_email']").val();
        let number = $("[name='number']").val();
        let token = $('meta[name="csrf-token"]').attr('content');


        $.ajax({
            url: "/reservation",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': token
            },

            data: {
                _token: token,
                id_moto: id_moto,
                number: number,
                date_debut: date_debut,
                date_fin: date_fin,
                pick_up_p: pick_up_p,
                drop_off_p: drop_off_p,
                c_full_name: full_name,
                c_phone: phone,
                c_email: email
            },
            success: function (response) {
                $(".alert-success").show();
                $('.alert-success').text(response.success);
                $("#reservation-form")[0].reset();
                $(".alert").slideDown(300).delay(4000).slideUp(300);
            },
            error: function (xhr) {

                $.each(xhr.responseJSON.errors, function () {

                    $(".alert-danger").show();
                    $("#email-error").text(xhr.responseJSON.errors.c_email)
                    $("#phone-error").text(xhr.responseJSON.errors.c_phone)
                    $("#pick-p-error").text(xhr.responseJSON.errors.pick_up_p)
                    $("#drop-p-error").text(xhr.responseJSON.errors.drop_off_p)
                    $("#pick-d-error").text(xhr.responseJSON.errors.date_debut)
                    $("#drop-d-error").text(xhr.responseJSON.errors.date_fin)
                    $("#name-error").text(xhr.responseJSON.errors.c_full_name)
                    $("#moto-error").text(xhr.responseJSON.errors.id_moto)
                    $("#number-error").text(xhr.responseJSON.errors.number)

                });
            }
        })
    });



    //////////////////////////Contact Form/////////////////////////////////////



    $('#contact-form').submit(function (e) {
        e.preventDefault();

        $("#email-error").text('')
        $("#message-error").text('')
        $("#name-error").text('')


        let full_name = $("[name='full_name']").val();
        let message = $("[name='message']").val();
        let email = $("[name='email']").val();
        let token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "/contact/message",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': token
            },
            data: {
                _token: token,
                full_name: full_name,
                message: message,
                email: email
            },

            success: function (response) {
                $(".alert-success").show();
                $('.alert-success').text(response.success);
                $("#contact-form")[0].reset();
                $(".alert").slideDown(300).delay(5000).slideUp(300);
            },
            error: function (xhr, status, error) {

                $.each(xhr.responseJSON.errors, function (key, item) {

                    $("#email-error").text(xhr.responseJSON.errors.email)
                    $("#message-error").text(xhr.responseJSON.errors.message)
                    $("#name-error").text(xhr.responseJSON.errors.full_name)

                });
            }
        })
    });
});