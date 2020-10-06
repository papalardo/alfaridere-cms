
/*******************/
/* REALIZAR LOGIN  */
/*******************/
/*********/
/*********/
/* CADASTRAR  */
/*********/
$("#pre-agendamento").validate({
    rules: {
        name: {
            required: true,
            minlength: 2
        },
        phone: {
            required: true,
        },
        email: {
            required: true,
            email: true
        },
        age: {
            required: true
        }          
    },
    messages: {
        name: "Nome obrigatório",
        email: "Por favor, preencha o email",
        age: "Por favor, preencha a idade",
        phone: "Por favor, preencha o Telefone"
    },
    submitHandler: function(element) {
        loadingButton(element, true);        
        // Loading
        $.ajax({
            type: 'POST',
            url: 'app/api/ajax.controller.php',
            dataType: "json",
            data: $("#pre-agendamento").serialize(),
            success: function(result) {
                loadingButton(element, false);        
                if(!result.success) {
                    toastr.warning(result.message);
                    $("#pre-agendamento")[0].reset();
                } else if(result.success == true) {
                    toastr.success(result.message);
                   
                } else {
                    // window.location.href = "carrinho.php";
                }
            }
        });
    }
});

/*********/
/* ESQUECI MINHA SENHA */
/*********/

$('.popup-reset-pass').on('click', function(e){
    e.preventDefault();
    getUserData();
})
$("#resetpassword-form").validate({
    rules: { email: { required: true, email: true  } },
    messages: { email: "Por favor, preencha o email" },
    submitHandler: function(element) {
        loadingButton(element, true);
        $.ajax({
            type: 'POST',
            url: 'app/api/ajax.controller.php',
            dataType: "json",
            data: $("#resetpassword-form").serialize(),
            success: function(result) {
                loadingButton(element, false);
                if(!result.success) {
                    toastr.warning(result.message);
                } else if(result.success == true) {
                    toastr.success(result.message);
                    $.magnificPopup.close();
                } else {
                    window.location.href = "index.php";
                }
            }
        });

    }
});