function init_saimod_webcraft_contact() {    
    $("#contact_form input, select, textarea").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {},
        submitSuccess: function($form, event){
            $.ajax({type :'POST',
                    url  : 'https://wat.webcraft-media.de/api.php?',
                    data : {    call: 'bug',
                                message: '!!!KUNDENKONTAKT: '+$('#input_contact_message').val(),
                                data: { email: $('#input_contact_email').val(), name: $('#btn_send').attr('project')}},
                    success : function(data) {
                        if(data.status){
                            $('.help-block').html("EMail erfolgreich abgeschickt.");
                            $('#input_contact_message').val('');
                        }else{
                            $('.help-block').html("EMail nicht erfolgreich abgeschickt - wir kümmern uns umgehend darum!");}
                    }
            });
            event.preventDefault();
        }
    });
}