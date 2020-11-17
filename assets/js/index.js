function init(){
  if((!localStorage.userId) || (localStorage.userId == 0)){
    localStorage.isLogedIn = false;
    localStorage.userId = "0";
    localStorage.userName = "";
    localStorage.userGender = "";
    localStorage.userBirth = "";
    localStorage.userEmail = "";
  }
}
function userIcon(){
  if(localStorage.isLogedIn == "true"){
    window.location.href = "./Account.php";
  }
  else{
    showLogin();
  }
}
function logout(){
  localStorage.isLogedIn = false;
  localStorage.userId = "0";
  localStorage.userName = "";
  localStorage.userGender = "";
  localStorage.userBirth = "";
  localStorage.userEmail = "";
  document.location.href= "./";
}

//Products Function
function goToProducts(){
  let currentURL = window.location.href;
  if (!currentURL.endsWith("/Products.php")){
    window.location.href = "./Products.php";
  }
}
function searchFocus(){
  $(".search-bar").focus();
  $(".search-bar").removeAttr("onclick");
  var q = "\\?"
  par = window.location.href.search(q);
  console.log(par);
  if(par > 0){
    str = decodeURI(window.location.href.split("?").slice(-1));
    console.log(str);
    $("#search").val(str);
    search('tags');
  }
}
function searchTag(value){
  $tag = $(value).text();
  window.location.href = "./Products.php?"+ $tag;
}
function search(value){
  $.ajax({
    type: "POST",
    url: "./components/Search.php",
    data: {
      "search": $("#search").val(),
      "value": value,
    },
    success: function(data) {
        $("#productsContainer").html(data);
    }
  });
  if ($("#search").val() != ""){
    $("#mainProduct").attr("hidden","");
  }
  else{
    $("#mainProduct").removeAttr("hidden");
  }
}
function goToItem(productName){  
  console.log("go to item");
  let itemName = productName;
  document.location.href= "./Product.php?item-name=" + itemName;
}
function buyNow(){
  addToCart();
  document.location.href= "./Cart.php";
}
function addToCart(){
  $.ajax({
    type: "POST",
    url: "./Controllers/addToCart.php",
    data: {
      item: $("#productName").text(),
      user: localStorage.userId
    },
    success: function(data) {
      console.log("Added To Cart");
    }
  });
}


//Login Modal Functions
function showLogin(){
  $(".login-outer").removeAttr("hidden");
}

function closeLogin(){
  $(".login-outer").attr("hidden","");
  $("#modalOuter").load(document.URL +  " #loginModal");
}

function register(){
  $("#loginForm").attr("hidden","");
  $("#spinner").attr({class:"spinner-border",role:"status"})
  setTimeout(hideLogin, 1000);
}

function hideLogin(){
  $("#spinner").removeAttr("class role");
  $("#loginTitle").text("Daftar");
  $("#registerForm").removeAttr("hidden");
}

function checkSimiliarity(){
  let password = $(".password-reg").val();
  let passConfirm = $(".re-password-reg").val();
  
  if(password != passConfirm){
    $("#confirmPass").removeAttr("hidden");
  }else{
    $("#confirmPass").attr("hidden","");
  }
}


//Cart Functions
function loginCheck(value){
  if($(value).text() == "Bayar"){
    $.ajax({
      type: "POST",
      url: "./Controllers/Buy.php",
      success: function(data){
        console.log(data);
      }
    })
  }

  if(localStorage.isLogedIn == "false"){
    showLogin();
  }
  else{
    $("body").html("<div class='loading-component'><div class='spinner-border',role:'status'></div></div>")
    setTimeout(() => {
      document.location.href = "./" + localStorage.nextScreen;
    },300);
  }
}
async function getCart(){
  setNextScreen("Summary.php");
  getAddress();

  await $.ajax({
    type: "POST",
    url: "./components/CartItem.php",
    data: {
      "user": localStorage.userId
    },
    success: function(data) {
      $("#chartItemContainer").html(data);
    }
  });
  getPrices();
}
async function getSummary(){
  setNextScreen("Account.php#purchaseHistory");
  getAddress();
  getShipping();
  getPayment();
  
  await $.ajax({
    type: "POST",
    url: "./components/SummaryItem.php",
    data: {
      "user": localStorage.userId
    },
    success: function(data) {
      $("#chartItemContainer").html(data);
      $("#cartButton").text("Bayar");
    }
  });
  loadAddress();
  getPrices();
}

function getPrices(){
  var total = 0;
  $(".cart-item-component").each(function () {
      let number = parseInt($(this).find("#itemNumber").text());
      let price = parseInt($(this).find(".itemPrice").text());
      
      total += (price*number);
      console.log(total);
  });
  if(($("#shippingPrice").text()) && (total > 0)){
    let shipping = parseInt($("#shippingPrice").text());
    total += shipping;
  }
  $("#totalPrice").text(total);
}
function getAddress(){
  $.ajax({
    type: "POST",
    url: "./components/CartAddress.php",
    data: {
      "user": localStorage.userId
    },
    success: function(data) {
      data = data.split(";");
      $("#buyerName").text(data[0]);
      $("#buyerAddress").text(data[1]);
    }
  });
}
function getShipping(){
  $.ajax({
    type: "POST",
    url: "./components/CartShipping.php",
    data: {},
    success: function(data) {
      $(".cart-shipping").html(data);
    }
  });
}
function getShippingList(){
  $.ajax({
    type: "POST",
    url: "./components/ShippingList.php",
    data:{
    },
    success: function(data){
      $(".summary-shipping-list-container").html(data);
    }
  })
}
function changeShipping(value){
  shipping = $(value).find(".shipping-id").attr("value");
  $.ajax({
    type: "POST",
    url: "./Controllers/changeShipping.php",
    data:{
      "shipping": shipping
    },
    success: function(data){
      console.log(data);
      location.reload();
    }
  });
}
function getPayment(){
  $.ajax({
    type: "POST",
    url: "./components/CartPayment.php",
    data: {},
    success: function(data) {
      $(".cart-payment").html(data);
    }
  });
}
function getPaymentList(){
  $.ajax({
    type: "POST",
    url: "./components/PaymentList.php",
    data:{
    },
    success: function(data){
      $(".summary-payment-list-container").html(data);
    }
  })
}
function changePayment(value){
  payment = $(value).find(".payment-id").attr("value");
  $.ajax({
    type: "POST",
    url: "./Controllers/changePayment.php",
    data:{
      "payment": payment
    },
    success: function(data){
      console.log(data);
      location.reload();
    }
  });
}
function checkItem(value){
  var method = "";
  if($(value).is(":checked")){
    method = "add"; 
  }
  else{
    method = "remove";
  }
  $.ajax({
    type: "POST",
    url: "./Controllers/CheckItem.php",
    data: {
      "name": $(value).val(),
      "method": method
    },
    success: function(data) {
      console.log(data);
    }
  });
}
function removeCheckedItem(){
  $.ajax({
    type: "POST",
    url: "./Controllers/CheckItem.php",
    data: {
      "name": "",
      "method": "remove"
    },
    success: function(data) {
      console.log(data);
      document.location.reload();
    }
  });
}
function itemNumber(value, param){
  numberObject = $(value).siblings("#itemNumber");
  number = parseInt($(value).siblings("#itemNumber").text());
  name = $(value).parents(".cart-item-component").find(".product-name").text();

  if(param == "plus"){
    number += 1;
  }else if(param == "min"){
    number -= 1;
  }
  
  if(number != 0){
    $.ajax({
      type:"POST",
      url: "./Controllers/changeItemNumber.php",
      data: {
        "name": name,
        "number": number,
      },
      cache:false,
      success: function(data){
        if(data == -1){
          alert("Tidak bisa ditambah lagi");
        }else{
          getPrices();
          numberObject.html(data);
        }
      }
    })
    
  }else{
    alert("Tidak bisa dikurangi lagi");
  }
}
function removeItem(value){
  name = $(value).parents(".cart-item-component").find(".product-name").text();
  $.ajax({
    type: "POST",
    url: "./Controllers/removeCartItem.php",
    data:{
      "name": name
    },
    success: function(){
      location.reload();
    }
  })
}


// Account Functions
function loadUserData(){
  $("#profilePhoto").attr("src", localStorage.userImage);
  $("#userName").text(localStorage.userName);
  $("#userGender").text(localStorage.userGender);
  $("#userBirth").text(localStorage.userBirth);
  $("#userEmail").text(localStorage.userEmail);
  $.ajax({
    type: "POST",
    url: "./components/PurchaseHistory.php",
    data:{
      "user": localStorage.userId
    },
    success: function(data){
      $("#purchaseHistory").html(data);
    }
  });
  loadAddress();
}
function showPassword(){
  $(".password-outer").removeAttr("hidden");
}
function closePassword(){
  $(".password-outer").attr("hidden","");
}
function loadClosePassword(){
  $("#passwordForm").attr("hidden","");
  $("#spinner").attr({class:"spinner-border",role:"status"})
  setTimeout(hidePassword, 1000);
}
function hidePassword(){
  $("#passwordModal").removeAttr("hidden");
}
function showAddress(){
  $(".address-outer").removeAttr("hidden");
}
function closeAddress(){
  $(".address-outer").attr("hidden","");
}
function loadAddress(){
  $.ajax({
    type: "POST",
    url: "./components/Address.php",
    data:{
      "user": localStorage.userId
    },
    success: function(data){
      $("#addressList").html(data);
    }
  });
}
async function addAddress(value){
  address = $(value).parent();
  await $(address).load("./components/AddAddress.php");
  setTimeout(() => {
    $("#addressUserId").val(localStorage.userId);
  },100)
}
function changeMainAddress(value){
  address = $(value).find(".address-id").attr("value");
  console.log(address , localStorage.userId);
  $.ajax({
    type: "POST",
    url: "./Controllers/changeMainAddress.php",
    data:{
      "user": localStorage.userId,
      "address": address
    },
    success: function(data){
      console.log(data);
      location.reload();
    }
  });
}
async function editBiodata(value){
  bio =  $(value).parents(".biodata").find(".biodata-section");
  await $(bio).load("./components/EditBiodata.php");
  setTimeout(() => {
    $("#userId").val(localStorage.userId);
    $("#userName").val(localStorage.userName);
    $("#userBirth").val(localStorage.userBirth);
    $("#userEmail").val(localStorage.userEmail);
    $("#userGender").val(localStorage.userGender);
  },100);
}
function changeProfilePhoto(){
  userId = localStorage.userId;
  form = `
    <div class="mt-2">
    <form class="text-center" action="./Controllers/changePhoto.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="userId" value="${userId}" hidden></span>
      <input type="file" name="file" id="fileToUpload">
      <input class="btn btn-success mt-3" type="submit" value="Upload Image" name="submit">
    </form>
    </div>
  `;
  $("#changePhotoButton").replaceWith(form);
}