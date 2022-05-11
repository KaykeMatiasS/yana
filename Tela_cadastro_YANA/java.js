
  // Mascara CPF  //

  const cpf = document.querySelector("#CPF_Esp") 

  cpf.addEventListener("keyup", event => {
      let start = cpf.selectionStart 
      let end = cpf.selectionEnd 
      
      if(start == end) { 
          formMask("___.___.___-__", "_", event, start);
      }
  })
  
  function formMask(mask, char, event, cursor) {
      
      const vetMask = mask.split("") 
      const onlyNumbers = cpf.value.split("").filter(value => !isNaN(value) && value != " ")
      const key = event.keyCode || event.which
      const backspaceAndArrowKeys = [8, 37, 38, 39, 40] 
      const clickedOnTheBackspaceOrArrowsKeys = backspaceAndArrowKeys.indexOf(key) >= 0
      const charNoMod = [".", "-"] 
      const cursorIsCloseToCharNoMod = charNoMod.indexOf(vetMask[cursor]) >= 0
  
      onlyNumbers.forEach( (value) => vetMask.splice(vetMask.indexOf(char), 1, value)) 
  
      cpf.value = vetMask.join("")
  
      if(!clickedOnTheBackspaceOrArrowsKeys && cursorIsCloseToCharNoMod) {
          cpf.setSelectionRange(cursor+1, cursor+1)
      } else {
          cpf.setSelectionRange(cursor, cursor)
      }
  
    
  }


 



  // mascarar TELEFONE //

/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('Contato_Esp').onkeyup = function(){
		mascara( this, mtel );
	}
}

