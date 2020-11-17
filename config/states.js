var currentScreen = {
  value: '',
  get screen() {
    return this.value;
  },
  set screen(value) {
    this.value = value;
    if (value == 'Shipping'){
      setTimeout(()=>{
        $(".cart-bar-button").attr({href:"./Summary.php", onlick: "changeCart('Summary');"})
      }, 3000)
    }
    else if (value == 'Summary'){
      $(".cart-bar-button").attr({href:"./Summary.php", onlick: "changeCart('Cart');"});
      window.location.href = "./Account/#purchaseHistory";
    }
  }
}

function changeCart(value){
  this.currentScreen.screen = value;
}