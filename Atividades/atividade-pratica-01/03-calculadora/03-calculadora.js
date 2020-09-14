
function calculadora(valor){

   {
      if(valor=='%') valor = '/100';

      if(valor=='='){

         document.calcula.exibe.value = eval(document.calcula.exibe.value);
         exibir = document.calcula.exibe.value = eval(document.calcula.exibe.value);

         if(exibir === undefined){
            document.calcula.exibe.value = "";
         }else{
            document.calcula.exibe.value = eval(document.calcula.exibe.value);
            exibir = document.calcula.exibe.value = eval(document.calcula.exibe.value);
         }
      }
      else{
         document.calcula.exibe.value = document.calcula.exibe.value + valor;
      }

   }
}





/**Referência: https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/eval */