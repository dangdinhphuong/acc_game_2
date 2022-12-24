const $ = (name) => {
  var elements = document.querySelectorAll(name);
  return elements.length == 1 ? elements[0] : elements;
};

var formRegister = $("#form__register");
var username = $("#username");
var password = $("#password");
var passwordConfirm = $("#password-confirm");
var errorUserName = $(".error-username");
var errorPassword = $(".error-password");
var errorPasswordConfirm = $(".error-password-confirm");

// Vadiate đăng ký
formRegister.addEventListener("submit", (e) => {
  e.preventDefault();
  
  console.log(password.value.length);
  errorUserName.innerText = username.value == "" ? "Bạn chưa nhập username !!!" : '';
  if(password.value == ""){
    errorPassword.innerText = "Bạn chưa nhập password !!!";
  }else if(password.value.length < 7){
    errorPassword.innerText = "Mật khẩu quá ngắn !!!";
  }else if(password.value.length > 25){
    errorPassword.innerText = "Mật khẩu quá dài !!!";
  }else{
    errorPassword.innerText = '';
  }

  if(passwordConfirm.value == ""){
    errorPasswordConfirm.innerText = "Bạn chưa xác nhận mật khẩu !!!";
  }else if(password.value != "" && passwordConfirm.value != password.value ){
    errorPasswordConfirm.innerText = "Mật khẩu confirm không đúng !!!";
  }else{
    errorPasswordConfirm.innerText = '';
  }

});
