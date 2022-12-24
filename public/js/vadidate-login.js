// const  $ = (name) => {
//     var elements = document.querySelectorAll(name);
//     return elements.length == 1  ? elements[0] : elements;
// }

// var formLogin = $('#form__login');
// var formRegister = $('#form__register');
// var username = $('#username');
// var password = $('#password');
// var errorUserName = $('.error-username');
// var errorPassword = $('.error-password');

// // Vadidate đăng nhập
// formLogin.addEventListener('submit' ,  (e) => {
//     e.preventDefault();

//     errorUserName.innerText = username.value == '' ? 'Bạn chưa nhập username !!!' : '';
//     if(password.value == ""){
//         errorPassword.innerText = "Bạn chưa nhập password !!!";
//       }else if(password.value.length < 7){
//         errorPassword.innerText = "Mật khẩu quá ngắn !!!";
//       }else if(password.value.length > 25){
//         errorPassword.innerText = "Mật khẩu quá dài !!!";
//       }else{
//         errorPassword.innerText = '';
//       }
// });
// document.getElementById("myCheck").click();

$(document).ready(function () {
    $("#login").click(function () {
        clearError();
        setTimeout(()=>{ console.log('chờ')
          if(!validateFrom()){
            $("#form__login").submit();
          }
        }, 200);

    });

    function clearError() {
        $(".error-js-realname").text("");
        $(".error-js-password").text("");
        $(".error-realname").text("");
        $(".error-password").text("");
    }

    function validateFrom() {
        var error = false;
        var realname = $("#realname").val();
        var password = $("#password").val();
        if (realname == "") {
            error = true;
            $(".error-js-realname").text("Tài khoản không được để trống");
        }

        if (password == "") {
            error = true;
            $(".error-js-password").text("Mật khẩu không được để trống");
        }

        return error;
    }
});
