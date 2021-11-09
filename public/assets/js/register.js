var form_submit = document.querySelector(".submitbtn");

form_submit.addEventListener("click", () => {
    var merchant_type = document.querySelector(".Merchant_type");
    var name = document.querySelector(".name");
    var id_Number = document.querySelector(".Id_Number");
    var phone_number = document.querySelector(".Phone_number");
    var email_address = document.querySelector(".Email_address");
    var home_address = document.querySelector(".Address");
    var r_code = document.querySelector(".R_code");
    var password = document.querySelector(".password");
    var c_password = document.querySelector(".C_password");
    var mt_value = merchant_type.value.trim();
    var name_valu = name.value.trim();
    var id_value = id_Number.value.trim();
    var phone_value = phone_number.value.trim();
    var email_value = email_address.value.trim();
    var home_address_value = home_address.value.trim();
    var r_code_vule = r_code.value.trim();
    var password_value = password.value.trim();
    var c_password_vule = c_password.value.trim();
    m_type(mt_value);
    name_fun(name_valu);
    id_fun(id_value);
    phone_fun(phone_value);
    email_fun(email_value);
    add_fun(home_address_value);
    r_code_fun(r_code_vule);
    password_fun(password_value);
    cpass_fun(c_password_vule);
});
function m_type(value) {
    var merchant_type = document.querySelector(".Merchant_type");
    if (value == 0) {
        merchant_type.classList.add("error");
        merchant_type.nextElementSibling.style.visibility = "visible";
    } else if (value > 0) {
        merchant_type.classList.remove("error");
        merchant_type.nextElementSibling.style.visibility = "hidden";
        merchant_type.classList.add("success");
    }
}

function name_fun(namevalue) {
    let validate = /^([a-xA-Z0-9\.-]+)$/;
    let nametest = validate.test(namevalue);
    var name = document.querySelector(".name");
    if (namevalue == "" || namevalue.length < 3) {
        name.classList.add("error");
        name.nextElementSibling.style.visibility = "visible";
    } else if (nametest == true) {
        name.classList.add("error");
        name.nextElementSibling.style.visibility = "visible";
    } else {
        name.classList.remove("error");
        name.nextElementSibling.style.visibility = "hidden";
        name.classList.add("success");
    }
}

function id_fun(id) {
    var id_Number = document.querySelector(".Id_Number");
    if (id == "" || id.length < 3) {
        id_Number.classList.add("error");
        id_Number.nextElementSibling.style.visibility = "visible";
    } else {
        id_Number.classList.remove("error");
        id_Number.nextElementSibling.style.visibility = "hidden";
        id_Number.classList.add("success");
    }
}

function phone_fun(phone) {
    var phone_number = document.querySelector(".Phone_number");

    if (phone == "" || phone.length < 5) {
        phone_number.classList.add("error");
        phone_number.nextElementSibling.style.visibility = "visible";
    } else {
        phone_number.classList.remove("error");
        phone_number.nextElementSibling.style.visibility = "hidden";
        phone_number.classList.add("success");
    }
}

function email_fun(email) {
    let regx = /^([a-xA-Z0-9\.-]+)@([a-xA-Z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
    let regx2 = regx.test(email);
    var email_address = document.querySelector(".Email_address");
    if (email == "" || regx2 === true) {
        email_address.classList.add("error");
        email_address.nextElementSibling.style.visibility = "visible";
    } else {
        email_address.classList.remove("error");
        email_address.nextElementSibling.style.visibility = "hidden";
        email_address.classList.add("success");
    }
}

function add_fun(address) {
    var home_address = document.querySelector(".Address");
    if (address == "" || address.length < 5) {
        home_address.classList.add("error");
        home_address.nextElementSibling.style.visibility = "visible";
    } else {
        home_address.classList.remove("error");
        home_address.nextElementSibling.style.visibility = "hidden";
        home_address.classList.add("success");
    }
}

function r_code_fun(code) {
    var r_code = document.querySelector(".R_code");
    if (code == "" || code.length < 2) {
        r_code.classList.add("error");
        r_code.nextElementSibling.style.visibility = "visible";
    } else {
        r_code.classList.remove("error");
        r_code.nextElementSibling.style.visibility = "hidden";
        r_code.classList.add("success");
    }
}

function password_fun(pass) {
    var password = document.querySelector(".password");
    if (pass == "" || pass.length < 6) {
        password.classList.add("error");
        password.nextElementSibling.style.visibility = "visible";
    } else {
        password.classList.remove("error");
        password.nextElementSibling.style.visibility = "hidden";
        password.classList.add("success");
    }
}

function cpass_fun(cpass) {
    var c_password = document.querySelector(".C_password");
    if (cpass == "" || cpass.length < 6) {
        c_password.classList.add("error");
        c_password.nextElementSibling.style.visibility = "visible";
    } else {
        c_password.classList.remove("error");
        c_password.nextElementSibling.style.visibility = "hidden";
        c_password.classList.add("success");
    }
}
/*   dashboard script start        */
