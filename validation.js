// Basic Field Validation
function validate(card,date,cvv,name) {
var regEx = /^5[1-5][0-9]{14}$|^2(?:2(?:2[1-9]|[3-9][0-9])|[3-6][0-9][0-9]|7(?:[01][0-9]|20))[0-9]{12}$/;
   if(card.value.match(regEx) && card.toString().length == 16)
     {
      return true;
     }
   else
     {
     alert("Please enter a valid credit card number.");
     return false;
     }

var regEx = /^5[1-5][0-9]{14}$|^2(?:2(?:2[1-9]|[3-9][0-9])|[3-6][0-9][0-9]|7(?:[01][0-9]|20))[0-9]{12}$/;
   if(cvv.value.match(regEx) && cvv.toString().length == 3)
     {
      return true;
     }
   else
     {
     alert("Please enter a valid cvv number.");
     return false;
     }

var regEx = /^5[1-5][0-9]{14}$|^2(?:2(?:2[1-9]|[3-9][0-9])|[3-6][0-9][0-9]|7(?:[01][0-9]|20))[0-9]{12}$/;
   if(cvv.value.match(regEx) && cvv.toString().length == 4)
     {
      return true;
     }
   else
     {
     alert("Please enter a valid cvv number.");
     return false;
     }

var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
    if(!regName.test(name)){
        alert('Invalid name given.');
    }else{
       return true;
    }
}