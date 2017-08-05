function myFuncV2(){

   // document.getElementBtId('here').innerHTML=<?php echo rand(1,49); ?>
     document.getElementBtId('<?php echo $_GET["WHERE"]; ?>').innerHTML=<?php echo rand(1,49); ?>
   //alert("OK:V2")
           //取代jsonp1.html的func
}


myFuncV2('OK');