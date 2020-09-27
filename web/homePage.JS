$(function(){
  $(".dice").click(function(){
    a="20"
   if (a == $(".diceIn").val()){
     $(".diceIn").val("Right Answer");
   }
   else{
    $(".diceIn").val("Wrong answer");
   }

  
});

});
