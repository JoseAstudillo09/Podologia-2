function valideKey(evt){
    
    // code is the decimal ASCII representation of the pressed key.
    var code = (evt.which) ? evt.which : evt.keyCode;

    if(code==8) { // backspace.
        return true;
      } else if(code>=48 && code<=57) { // Numeros del 0 al 9.
        return true;
      } else if(code == 45){ //guion.
          return true;
      }else
      return false;
}


function calculoImc(){
  var peso = document.getElementById("peso").value;
  var talla = document.getElementById("talla").value;

  document.getElementById("imc").innerHTML = peso / Math.pow(talla,2);
}


date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("inputFechaAct").innerHTML = day + "/" + month + "/" + year;

const pass_field = document.querySelector(".pass-key");
const showBtn = document.querySelector(".show");
showBtn.addEventListener("click", function () {
  if(pass_field.type === "password") {
    pass_field.type = "text";
    showBtn.textContent = "HIDE";
    showBtn.style.color = "#3498db";
  }else{
    pass_field.type = "password";
    showBtn.textContent = "SHOW";
    showBtn.style.color = "#222";
  }
});
