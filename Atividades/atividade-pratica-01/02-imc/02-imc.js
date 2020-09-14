function Pessoa(nome, peso, altura){
    this.nome = nome;
    this.peso = peso;
    this.altura = altura;
}

function calcularIMC(){

 let nome = document.frm.nome.value;
 let peso = document.frm.peso.value;
 let altura = document.frm.altura.value;

 let pesoNum = parseInt(peso);
 let alturaNum = parseInt(altura);

 if(validar(peso, altura)){
    let i = (pesoNum/(alturaNum*alturaNum))*10000;
    let imc = i.toFixed(1);


    document.getElementById('titulo').innerHTML  = nome + ' seu IMC é: ' + imc;

    destacarTabela(imc);
 }

}

function destacarTabela(item){

    let imc = item;
    if(imc < 18.5){
        document.getElementById('1').setAttribute('class','table-info');
    }
    else if(imc >= 18.5 && imc <= 24.9){
        document.getElementById('2').setAttribute('class','table-info');
    }
    else if(imc >= 25 && imc <= 29.9){
        document.getElementById('3').setAttribute('class','table-info');
    }
    else if(imc >= 30 && imc <= 34.9){
        document.getElementById('4').setAttribute('class','table-info');
    }else if(imc >= 35 && imc <=39.9){
        document.getElementById('5').setAttribute('class','table-info');
    }else if(imc > 40){
        document.getElementById('6').setAttribute('class','table-info');
    }



}

function validar(peso, altura){
    let p = peso;
    let a = altura;
    if(p.length == 0 || a.length == 0){
        window.alert("Informe os dados corretamente");
        return false;
    
    }

    return true;
}

/**Recarregar página*/
function recarregar(){
    location.reload();
  }