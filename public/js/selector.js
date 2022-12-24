var sle = (name) => {
    var elements = document.querySelectorAll(name);
    return elements.length == 1 ? elements[0] : elements;
}

let countClick = 1;
sle('.home__word-one').addEventListener('click' , () => {
    countClick++;
    if(countClick % 2 == 0){
        sle('.home__word-one').classList.add('active');
        sle('.home__word--list-one').classList.add('active');
        sle('.home__word-two').classList.remove('active');
        sle('.home__word--list-two').classList.remove('active');
    }else{
        sle('.home__word-one').classList.remove('active');
        sle('.home__word--list-one').classList.remove('active');
    }
})

sle('.select__item-one').forEach(element => {
    element.addEventListener('click' , () => {
       sle('#home__word').value = element.innerText;
       sle('.home__word--result').innerText = element.innerText;
       sle('.home__word-one').classList.remove('active');
       sle('.home__word--list-one').classList.remove('active');
    });
});

sle('.select__item-two').forEach(element => {
    element.addEventListener('click' , () => {
        console.log(element.innerText.split('.')[0] + '000');
       sle('#money').value = element.innerText.split('.')[0] + '000';
       sle('.home__word--result-two').innerText = element.innerText;
       sle('.home__word-two').classList.remove('active');
       sle('.home__word--list-two').classList.remove('active');
    });
});

let countClickTwo = 1;
sle('.home__word-two').addEventListener('click' , () => {
    countClickTwo++;
    if(countClickTwo % 2 == 0){
        sle('.home__word-two').classList.add('active');
        sle('.home__word--list-two').classList.add('active');
        sle('.home__word-one').classList.remove('active');
        sle('.home__word--list-one').classList.remove('active');
    }else{
        sle('.home__word-two').classList.remove('active');
        sle('.home__word--list-two').classList.remove('active');
    }
})

sle('.form__card').addEventListener('submit' , (e) => {
    e.preventDefault()
     
    var pattern = /[0-9]/;
    var code =  document.querySelector('#code');
    var serial = document.querySelector('#serial');
    let checkCode = false;
    let checkSerial = false;
    if(code.value == ''){
        sle('.error-code').innerText = 'Bạn đang bỏ trống dữ liệu !';
    }else if(code.value.length > 16 || code.value.length < 12){
        sle('.error-code').innerText = 'Kiểm tra lại mã code !';
    }else if(!pattern.test(code.value)){
        sle('.error-code').innerText = 'Mã code phải là số !';
    }else{
        sle('.error-code').innerText = '';
        checkCode = true;
    }

    if(serial.value == ''){
        sle('.error-serial').innerText = 'Bạn đang bỏ trống dữ liệu !';
    }else if(serial.value.length > 15 || code.value.length < 12){
        sle('.error-serial').innerText = 'Kiểm tra lại mã serial !';
    }else if(!pattern.test(serial.value)){
        sle('.error-serial').innerText = 'Mã serial phải là số !';
    }else{
        sle('.error-serial').innerText = '';
        checkSerial = true;
    }

    if(checkCode && checkSerial){
        sle('.form__card').submit();
    }
});

sle('#code').addEventListener('keyup' , () =>{
    var pattern = /[0-9]/;
    if(sle('#code').value == ''){
        sle('.error-code').innerText = 'Bạn đang bỏ trống dữ liệu !';
    }else if(sle('#code').value.length > 16 || code.value.length < 12){
        sle('.error-code').innerText = 'Kiểm tra lại mã code !';
    }else if(!pattern.test(sle('#code').value)){
        sle('.error-code').innerText = 'Mã code phải là số !';
    }else{
        sle('.error-code').innerText = '';
    }
});

sle('#serial').addEventListener('keyup' , () =>{
    var pattern = /[0-9]/;
    if(sle('#serial').value == ''){
        sle('.error-serial').innerText = 'Bạn đang bỏ trống dữ liệu !';
    }else if(sle('#serial').value.length > 16 || code.value.length < 12){
        sle('.error-serial').innerText = 'Kiểm tra lại mã code !';
    }else if(!pattern.test(sle('#serial').value)){
        sle('.error-serial').innerText = 'Mã code phải là số !';
    }else{
        sle('.error-serial').innerText = '';
    }
});