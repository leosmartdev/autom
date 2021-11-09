/*Register form script start */
try{
var form_submit = document.querySelector('.Registerbtn');
form_submit.addEventListener("click", () => {
  var merchant_type = document.querySelector('.register .Merchant_type');
  var name = document.querySelector('.name');
  var id_Number = document.querySelector('.Id_Number');
  var phone_number = document.querySelector('.Phone_number');
  var email_address = document.querySelector('.Email_address');
  var home_address = document.querySelector(".Address");
  var r_code = document.querySelector('.R_code');
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
  password_fun(password_value)
  cpass_fun(c_password_vule);

})

function m_type(value) {
  var merchant_type = document.querySelector('.Merchant_type');
  if (value == 0) {
    merchant_type.classList.add('error');
    merchant_type.nextElementSibling.style.visibility = "visible";
  } else if (value > 0) {
    merchant_type.classList.remove('error');
    merchant_type.nextElementSibling.style.visibility = "hidden";
    merchant_type.classList.add('success');
  }
}

function name_fun(namevalue) {
  let validate = /^([a-xA-Z0-9\.-]+)$/;
  let nametest = validate.test(namevalue)
  var name = document.querySelector('.name');
  if (namevalue == "" || namevalue.length < 3) {
    name.classList.add('error');
    name.nextElementSibling.style.visibility = "visible";
  } else if (nametest == true) {
    name.classList.add('error');
    name.nextElementSibling.style.visibility = "visible";
  } else {
    name.classList.remove('error');
    name.nextElementSibling.style.visibility = "hidden";
    name.classList.add('success');
  }
}

function id_fun(id) {
  var id_Number = document.querySelector('.Id_Number');
  if (id == "" || id.length < 3) {
    id_Number.classList.add('error');
    id_Number.nextElementSibling.style.visibility = "visible";
  } else {
    id_Number.classList.remove('error');
    id_Number.nextElementSibling.style.visibility = "hidden";
    id_Number.classList.add('success');
  }
}

function phone_fun(phone) {
  var phone_number = document.querySelector('.Phone_number');

  if (phone == "" || phone.length < 5) {
    phone_number.classList.add('error');
    phone_number.nextElementSibling.style.visibility = "visible";
  } else {
    phone_number.classList.remove('error');
    phone_number.nextElementSibling.style.visibility = "hidden";
    phone_number.classList.add('success');
  }
}

function email_fun(email) {
  let regx = /^([a-xA-Z0-9\.-]+)@([a-xA-Z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
  let regx2 = regx.test(email);
  var email_address = document.querySelector('.Email_address');
  if (email == "" || regx2 === true) {
    email_address.classList.add('error');
    email_address.nextElementSibling.style.visibility = "visible";
  } else {
    email_address.classList.remove('error');
    email_address.nextElementSibling.style.visibility = "hidden";
    email_address.classList.add('success');
  }
}

function add_fun(address) {
  var home_address = document.querySelector(".Address");
  if (address == "" || address.length < 5) {
    home_address.classList.add('error');
    home_address.nextElementSibling.style.visibility = "visible";
  } else {
    home_address.classList.remove('error');
    home_address.nextElementSibling.style.visibility = "hidden";
    home_address.classList.add('success');
  }
}

function r_code_fun(code) {
  var r_code = document.querySelector('.R_code');
  if (code == "" || code.length < 2) {
    r_code.classList.add('error');
    r_code.nextElementSibling.style.visibility = "visible";
  } else {
    r_code.classList.remove('error');
    r_code.nextElementSibling.style.visibility = "hidden";
    r_code.classList.add('success');
  }
}

function password_fun(pass) {
  var password = document.querySelector(".password");
  if (pass == "" || pass.length < 6) {
    password.classList.add('error');
    password.nextElementSibling.style.visibility = "visible";
  } else {
    password.classList.remove('error');
    password.nextElementSibling.style.visibility = "hidden";
    password.classList.add('success');
  }
}

function cpass_fun(cpass) {
  var c_password = document.querySelector(".C_password");
  if (cpass == "" || cpass.length < 6) {
    c_password.classList.add('error');
    c_password.nextElementSibling.style.visibility = "visible";
  } else {
    c_password.classList.remove('error');
    c_password.nextElementSibling.style.visibility = "hidden";
    c_password.classList.add('success');
  }
}
}catch(error){

};
/*Register form script end */
/*   login form script start        */
try{
    
let login = document.querySelector('.login');
login.addEventListener("click",(e)=>{
let form_select = document.querySelector(".form-select");
let email_Phone = document.querySelector(".Email_Phone");
let password = document.querySelector(".password");
let radio = document.querySelector(".privacy_agreement .radio");

let select_value =form_select.value.trim();
let email_Phone_value =email_Phone.value.trim();
let password_value =password.value.trim();

if(select_value ==0){
    form_select.classList.add("error");
    form_select.nextElementSibling.style.visibility="visible";
    e.preventDefault();
}else{
    form_select.classList.remove("error");
    form_select.nextElementSibling.style.visibility="hidden";
    form_select.classList.add("success");
}
if(email_Phone_value =="" || email_Phone_value.length <5){
    email_Phone.classList.add("error");
    email_Phone.nextElementSibling.style.visibility="visible";
    e.preventDefault();
}else{
    email_Phone.classList.remove("error");
    email_Phone.nextElementSibling.style.visibility="hidden";
    email_Phone.classList.add("success");
}
if(password_value="" || password_value.length < 6){
    password.classList.add("error");
    password.nextElementSibling.style.visibility="visible";
    e.preventDefault();
}else{
    password.classList.remove("error");
    password.nextElementSibling.style.visibility="hidden";
    password.classList.add("success");
}
if(radio.checked ==false){
 e.preventDefault();
}
});
}catch(error){
}
/*   login form script start        */
/*  Confirm Shipping Address form script start        */
try{
    let submit = document.querySelector(".nextbtn");
let cancel = document.querySelector(".cancelbtn");
submit.addEventListener("click", (e)=>{
    let default_Address = document.querySelector(".Default_Address");
    let first_Name = document.querySelector(".First_Name");
    let last_Name = document.querySelector(".Last_Name");
    let address = document.querySelector(".Address");
    let as_etc = document.querySelector(".AS_etc");
    let post_Code = document.querySelector(".Post_Code");
    let city = document.querySelector(".City");
    let state_Territory = document.querySelector(".State_Territory");
    let country_Region = document.querySelector(".Country_Region");
    let phone = document.querySelector(".Phone");
    let save_information = document.querySelector(".Save_information input");
    let radio_one = document.querySelector(".radio_two input:nth-child(1)");
    let radio_tow = document.querySelector(".radio_two input:nth-child(2)");
    // values
    let d_Address =default_Address.value.trim();
    let fname = first_Name.value.trim();
    let lname =last_Name.value.trim();
    let add =address.value.trim();
    let as_etc_v =as_etc.value.trim();
    let p_Code =post_Code.value.trim();
    let city_v =city.value.trim();
    let st_v =state_Territory.value.trim();
    let cr_v = country_Region.value.trim();
    let phone_v = phone.value.trim();
    let validate = /^([a-xA-Z0-9\.-]+)$/;
    let number = /^([0-9\.-]+)$/;
    
  if(d_Address ==0){
      default_Address.classList.add("error");
      default_Address.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else{
       default_Address.classList.remove("error");
      default_Address.nextElementSibling.style.visibility="hidden";
      default_Address.classList.add("success");
  }
  if(fname ==""){
      first_Name.classList.add("error");
      first_Name.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else if(validate.test(fname)){
      first_Name.classList.add("error");
      first_Name.nextElementSibling.innerText="Enter a vilide name";
      first_Name.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else if(fname.length < 3){
      first_Name.classList.add("error");
      first_Name.nextElementSibling.innerText="Enter name more 3 characters";
      first_Name.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else{
       first_Name.classList.remove("error");
      first_Name.nextElementSibling.style.visibility="hidden";
      first_Name.classList.add("success");
  }
   if(lname ==""){
      last_Name.classList.add("error");
      last_Name.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else if(!validate.test(lname) ){
      last_Name.classList.add("error");
      last_Name.nextElementSibling.innerText="Enter a vilide name";
      last_Name.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else if(lname.length < 3){
      last_Name.classList.add("error");
      last_Name.nextElementSibling.innerText="Enter name more 3 characters";
      last_Name.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else{
       last_Name.classList.remove("error");
      last_Name.nextElementSibling.style.visibility="hidden";
      last_Name.classList.add("success");
  }
   
  if(add ==""){
      address.classList.add("error");
      address.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else if(!validate.test(add) || add.length<5){
      address.classList.add("error");
      address.nextElementSibling.innerText="Enter a vilide address";
      address.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else{
       address.classList.remove("error");
      address.nextElementSibling.style.visibility="hidden";
      address.classList.add("success");
  }

   if(as_etc_v ==""){
      as_etc.classList.add("error");
      as_etc.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else if(validate.test(as_etc_v) || as_etc_v.length<3){
      as_etc.classList.add("error");
      as_etc.nextElementSibling.innerText="Enter a vilide address";
      as_etc.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else{
       as_etc.classList.remove("error");
      as_etc.nextElementSibling.style.visibility="hidden";
      as_etc.classList.add("success");
  }

    if(p_Code ==""|| !number.test(p_Code)){
      post_Code.classList.add("error");
      post_Code.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else{
       post_Code.classList.remove("error");
      post_Code.nextElementSibling.style.visibility="hidden";
      post_Code.classList.add("success");
  }

     if(city_v ==""){
      city.classList.add("error");
      city.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else if(!validate.test(city_v) || city_v.length<3){
      city.classList.add("error");
      city.nextElementSibling.innerText="Enter a vilide address";
      city.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else{
       city.classList.remove("error");
      city.nextElementSibling.style.visibility="hidden";
      city.classList.add("success");
  }
    if(st_v ==0){
      state_Territory.classList.add("error");
      state_Territory.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else{
       state_Territory.classList.remove("error");
      state_Territory.nextElementSibling.style.visibility="hidden";
      state_Territory.classList.add("success");
  }

  if(cr_v ==0){
      country_Region.classList.add("error");
      country_Region.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else{
       country_Region.classList.remove("error");
      country_Region.nextElementSibling.style.visibility="hidden";
      country_Region.classList.add("success");
  }
  if(phone_v ==""){
      phone.classList.add("error");
      phone.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else if(!number.test(phone_v)){
      phone.classList.add("error");
      phone.nextElementSibling.style.visibility="visible";
       e.preventDefault();
  }else{
       phone.classList.remove("error");
      phone.nextElementSibling.style.visibility="hidden";
      phone.classList.add("success");
  }
 return true;
})
}catch(error){

}
/*  Confirm Shipping Address form script end        */

/*   minus plus script start        */

try{
var plus_i = document.querySelectorAll(".input .fa-plus");
var minus_i = document.querySelectorAll(".input .fa-minus");

for(var i =0; i < plus_i.length; i++ ){
        var button = plus_i[i];
          button.addEventListener("click", (event)=>{
           var buttonclick = event.target;
           var input = buttonclick.parentElement.children[1]; 
           var inputValue = input.value;
           var newvalue = parseInt(inputValue) +1;
           input.value =newvalue;
           
          })
}
for(var i =0; i < minus_i.length; i++ ){
        var button = minus_i[i];
          button.addEventListener("click", (event)=>{
           var buttonclick = event.target;
           var input = buttonclick.parentElement.children[1]; 
           var inputValue = input.value;
            if(input.value<1){
                    input.value = "1";
            }else{
          var newvalue = parseInt(inputValue) -1;
           input.value =newvalue;
            }
          })
}
}catch(error){

}
/*   minus plus script end        */
/*    start  */
/*
try{
    // selecting required element
    const pagination = document.querySelector(".paginationn_box .pagination");
    let pages_number = pagination.querySelector(".pages_number").value;
    let page = 10;
    // calling function with passing adding inside element which ul tag
    pagination.innerHTML = createPagination(pages_number, page);
    function createPagination(pages_number, page) {
        let liTag = '';
        let active;
        let beforpage = page - 1;
        let afterpage = page + 1;
        if (page > 1) {
            // show next button if the value is greater then 1
            liTag += `<li class="page-item" onclick="createPagination(pages_number, ${
                page - 1
            })" > <a class="page-link" href="#">PREV</a> </li>`;
        }

        // how many pages or li show the current li
        if (page = pages_number) {
            beforpage = beforpage - 2;
        } else if (page == pages_number - 1) {
            beforpage = beforpage - 1;
        }
        // how many pages or li show after current li
        if (page = 1) {
            afterpage = afterpage + 2;
        } else if (page == 2) {
            afterpage = afterpage + 1;
        }
        for (var plenght = beforpage; plenght <= afterpage; plenght++) {
            if (plenght > pages_number) {
                // if plenght is greater then pages_number lenght then countinue
                countinue;
            }
            if (plenght == 0) {
                plenght = plenght + 1;
            }
            if (page == plenght) {
                active = "active";
            } else {
                active = "";
            }
            liTag += ` <li class="page-item ${active}" onclick="createPagination(pages_number, ${plenght})"> <a class="page-link" href="#">${plenght}</a>
                                        </li>`;
        }
        if (page < pages_number - 1) {
          if (page < pages_number -2){
            liTag += `<li class="page-item" onclick="createPagination(pages_number, ${pages_number})"> <a class="page-link" href="#">..</a></li>`;
          }
              liTag += `<li class="page-item" onclick="createPagination(pages_number, ${pages_number})"> <a class="page-link" href="#">${pages_number}</a></li>`;
        }
        if (page < pages_number) {
            liTag += `<li class="page-item" onclick="createPagination(pages_number, ${
                page + 1
            })"> <a class="page-link" href="#">Next</a></li>`;
        }
        pagination.innerHTML = liTag;
        return liTag;
        console.log(pages_number);
    }
        createPagination(pages_number, page);
             
}catch(error){

}
*/
/* pagination   end  */

/*  pagination  start  */
try{}catch(error){

}
/*    end  */