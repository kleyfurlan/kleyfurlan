(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/site/js/front"],{

/***/ "./resources/js/front.js":
/*!*******************************!*\
  !*** ./resources/js/front.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $(".agendamento").validate({
    errorElement: "span",
    errorClass: "text-danger",
    // focusInvalid: 	!1,
    // ignore: 		".note-editable.panel-body",
    // define validation rules
    rules: {
      nome: {
        required: true,
        maxlength: 50
      },
      telefone: {
        required: true,
        maxlength: 12
      },
      email: {
        required: true,
        email: true
      },
      data: {
        required: true
      }
    },
    messages: {
      nome: {
        required: "Nome obrigatório",
        maxlength: "Máx {0} caracteres"
      },
      telefone: {
        required: "Telefone obrigatório",
        maxlength: "Máx {0} caracteres"
      },
      email: {
        required: "Email obrigatório",
        email: "Email invalido"
      },
      data: {
        required: "Escolha uma data"
      }
    },
    highlight: function highlight(e) {
      $(e).addClass("is-invalid");
    },
    unhighlight: function unhighlight(e) {
      $(e).removeClass("is-invalid");
    },
    success: function success(e) {
      e.removeClass("is-invalid");
    },
    //display error alert on form submit  
    invalidHandler: function invalidHandler(event, validator) {},
    submitHandler: function submitHandler(form, e) {
      e.preventDefault();
      axios({
        method: form.method,
        url: form.action,
        data: $(form).serialize(),
        config: {
          header: {
            'Content-Type': 'multipart/form-data'
          }
        }
      }).then(function (response) {
        // console.log('resposta', response);
        if (response.data.status) {
          Swal.fire({
            type: 'success',
            title: 'Agendado!',
            text: response.data.message
          }).then(function (result) {
            $(form).find('input[type=text], input[type=email]').val("");
            $('#agendar').modal('toggle');
          });
        }
      }).catch(function (error) {
        var errors = error.response.data.errors;
        var firstItem = Object.keys(errors)[0];
        var firstItemDOM = document.getElementById(firstItem);
        var firstErrorMessage = errors[firstItem][0]; // scroll to the error messsage

        firstItemDOM.scrollIntoView({
          behavior: 'smooth'
        }); // remove all error messages

        var errorMessages = document.querySelectorAll('.is-invalid');
        errorMessages.forEach(function (element) {
          return element.textContent = '';
        }); // show error message

        firstItemDOM.insertAdjacentHTML('afterend', "<span class=\"is-invalid\">".concat(firstErrorMessage, "</span>")); // remove all from controls with highlited errors text bos

        var formControls = document.querySelectorAll('.form-control');
        formControls.forEach(function (element) {
          return element.classList.remove('border', 'border-danger');
        }); // highlight the form control with the error

        firstItemDOM.classList.add('border', 'border-danger'); // console.log(error);
      });
      return false;
    }
  });
});

/***/ }),

/***/ 1:
/*!*************************************!*\
  !*** multi ./resources/js/front.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\kley\resources\js\front.js */"./resources/js/front.js");


/***/ })

},[[1,"/site/js/manifest"]]]);