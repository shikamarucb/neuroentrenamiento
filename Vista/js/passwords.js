function compara(){
  var texto_1 = document.registro.password.value;
  var texto_2 = document.registro.password2.value;
  var tam_txt_1 = texto_1.length;
  var tam_txt_2 = texto_2.length;
  if (tam_txt_1 != tam_txt_2) {
    alert('las Contraseñas no coinciden..!!');
    return false;
  } else {
    for (n = 0; n < tam_txt_1; n++) {
      if (texto_1.charAt(n) != texto_2.charAt(n)) {
        alert('las Contraseñas no coinciden..!!');
        return false;
      }
    }    
    return true;
  }
} 