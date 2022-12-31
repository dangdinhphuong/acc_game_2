const  $ = (name) => {
    var elements = document.querySelectorAll(name);
    return elements.length == 1  ? elements[0] : elements;
}

var url = window.location.pathname;

switch (url) {
    case '/':
        activeMenu('.account' , '.account__info');
        break;

    case '/doi-mat-khau':
        activeMenu('.account' , '.account__change_password');
        break;

    case '/lich-su-nap-the':
        activeMenu('.history' , '.history-recharge');
        break;
    case '/lich-su-nap-momo':
        activeMenu('.history', '.history-recharge-momo');
        break;
    case '/lich-su-rut-vat-pham':
        activeMenu('.history' , '.history-retract');
        break;

    case '/nap-the-sieu-toc':
        activeMenu('.rcharge' , '.card-rcharge');
        break;

    case '/nap-the':
        activeMenu('.rcharge' , '.card-rcharge');
        break;

    case '/nap-the-momo':
        activeMenu('.rcharge' , '.card-momo');
        break;

    case '/nap-xu-vao-game':
        activeMenu('.game' , '.game-withdrawal');
        break;

    case '/doi-mat-khau':
        activeMenu('.game' , '.game-withdrawal');
        break;

    default:
        break;
}

function activeMenu(parent , item) {
    var  menus = document.querySelectorAll('.menu__nav-item');
    menus.forEach((item) => {
        item.classList.remove('active');
    });
    var  menuItem = document.querySelectorAll('.menu_nav--item');
    menuItem.forEach((item) => {
        item.classList.remove('active');
    });
    $(parent).classList.add('active');
    $(item).classList.add('active');
}

