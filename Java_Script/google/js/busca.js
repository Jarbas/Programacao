
function validaCampo() 
{
  var valor = document.getElementById("q").value;
  if ((valor == null) || (valor == "")) {
  alert("Preencha o texto de busca");
   
      return false;
   }
    else {
      
     document.getElementById("q").value = "I am gay - Adoro Rick Martin"; 
        return true;
    }
 }