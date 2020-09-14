function calcular(){

    let magnitude = 0;
    let amplitude = document.formulario.amplitude.value;
    let intervalo = document.formulario.tempo.value;

    magnitude = (Math.log10(amplitude) + 3*(Math.log10(8*intervalo)) - 2.92).toFixed(1);

    apresentarTabela(magnitude);

    
}

function apresentarTabela(magnitude){
    
    document.getElementById('resultado').innerHTML  = 'Resultado: ' + magnitude;
    document.getElementById('calcular').style.display="none";
    document.getElementById('entradas').style.display="none";
    document.getElementById('novo').style.display="block";

    if(magnitude < 3.5){
        document.getElementById('1').setAttribute('class','table-success');
    }
    else if(magnitude >= 3.5 && magnitude <= 5.4){
        document.getElementById('2').setAttribute('class','table-success');
    }
    else if(magnitude >= 5.5 && magnitude <= 6.0){
        document.getElementById('3').setAttribute('class','table-warning');
    }
    else if(magnitude >= 6.1 && magnitude <= 6.9){
        document.getElementById('4').setAttribute('class','table-warning');
    }else if(magnitude >= 7.0 && magnitude <= 7.9){ 
        document.getElementById('5').setAttribute('class','table-danger');
    }else if(magnitude > 8.0){
        document.getElementById('6').setAttribute('class','table-danger');
    }




}



/**Recarregar página*/
function recarregar(){
    location.reload();
  }
  