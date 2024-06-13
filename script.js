$("#formValidation").validate({
  rules:{
    nome:{
      minlength: 2
    },
    sobrenome:{
      minlength: 2
    },
    idade:{
      number:true,
    },
    celular:{
      number: true,
      minlength: 11,
      maxlength: 11
    },
    email:{
      email: true
    }
  },
  messages: {
    nome:{
      required: "Preencha com seu nome.",
      minlength:"Nome deve ter ao menos 2 caracteres."
    },
    sobrenome:{
      required: "Preencha com seu sobrenome.",
      minlength:"Sobrenome deve ter ao menos 2 caracteres."
    },
    idade:"Preencha com sua idade.",
    celular:"Preencha com seu celular.",
    email:"Preencha com seu email."
  },
  submitHandler: function(form) {
    form.submit();
  }
 });