function clickButton() {
    var email = document.getElementById('email').value;
    var number = document.getElementById('number').value;
    console.log(email + "\nи\n" + number);

    if (ValidMail(email) && ValidPhone(number)) {
        alert("Данные отправлены");
    } else alert("Неправильно введены данные");
}

function ValidMail(email) {
    var re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
    var valid = re.test(email);
    if (valid) {
        return true;
    } else {
        return false;
    }
}

function ValidPhone(number) {
    var re = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
    var valid = re.test(number);
    if (valid) {
        return true;
    } else {
        return false;
    }
}

var count = 0;
if (count == 0) {
    var text = document.getElementById('spiski').innerHTML;
    count++;
}
document.getElementById('poisk').oninput = function() {
    var re = document.getElementById('poisk').value;
    var result = text.replace(re, "<div style='color:Pink; display:inline;'>" + re + "</div>");
    document.getElementById('spiski').innerHTML = result;
}