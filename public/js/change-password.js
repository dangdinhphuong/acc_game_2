const sle = (element) =>{
    var elements = document.querySelectorAll(element);
    return elements.length == 1 ? elements[0] : elements ;
}

sle('.form-box').addEventListener('submit'  , (e) => {
    e.preventDefault();
    
    let checkCurrentPass = false;
    let checkNewPass = false;
    let checkConfirmPass = false;
    let samePassword = false;
    if(sle('.password__current').value == ''){
        sle('.error__curpassword').innerText='Bạn chưa nhập mật khẩu cũ !';
    }else{
        sle('.error__curpassword').innerText='';
        checkNewPass = true;
    }

    if(sle('.password__new').value == ''){
        sle('.error__password-new').innerText='Bạn chưa nhập mật khẩu mới !';
    }else{
        sle('.error__password-new').innerText='';
        checkCurrentPass = true;
    }

    if(sle('.password__confirm').value == ''){
        sle('.error__password-confirm').innerText='Bạn chưa nhập mật khẩu xác nhận !';
    }else{
        sle('.error__password-confirm').innerText='';
        checkConfirmPass = true;
    }

    if(sle('.password__new').value !== sle('.password__confirm').value){
        sle('.error__password-confirm').innerText='Mật khẩu xác nhận chưa chính xác !';
    }else{
        sle('.error__password-confirm').innerText='';
        samePassword = true;
    }
    if(checkCurrentPass && checkNewPass && checkConfirmPass && samePassword){
        sle('.form-box').submit();
    }

})