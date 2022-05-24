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

date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("inputFechaAct").innerHTML = day + "/" + month + "/" + year;