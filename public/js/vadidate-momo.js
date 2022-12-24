

var inputSerial = document.querySelector('#input-serial');
var formRetract = document.querySelector('.form__retract');
var error = document.querySelector('.error');
var routeSubmit = document.querySelector('#route-submit');
var resultMoney = document.querySelector('.result-money');
formRetract.addEventListener('submit' , (e) => {
    e.preventDefault();
    if(inputSerial.value == ''){
        error.innerText = 'Bạn chưa nhập số tiền';
    }else if(inputSerial.value.length < 5){
        error.innerText = 'Bạn nhập sai mạnh giá tiền';
    }else{
        error.innerText = '';
        formRetract.submit();
    }
});

inputSerial.addEventListener('keyup' , () => {
    var parent = /[0-9]/;
    if(inputSerial.value == ''){
        error.innerText = 'Bạn chưa nhập số tiền';
        resultMoney.innerText = '0đ';
    }else if(!parent.test(inputSerial.value)){
        inputSerial.style.color = '#ff013c';
        error.innerText = 'Dữ liệu phải là số';
        resultMoney.innerText = '0đ';
    }else if(inputSerial.value > 30000000){
        inputSerial.style.color = '#ff013c';
        error.innerText = 'Tối đa số tiền giao dịch 30 triệu';
        resultMoney.innerText = '0đ';
    }else{
        error.innerText = '';
        inputSerial.style.color = 'white';
        resultMoney.innerText = new Intl.NumberFormat('en-DE').format(inputSerial.value)+ 'đ';
    }
   
})