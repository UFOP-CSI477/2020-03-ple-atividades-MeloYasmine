var i = 0
var listaCompetidores = [];

/**Objeto competidor */
function Competidor(indice, nome, tempo){
  this.indice = indice;
  this.nome = nome;
  this.tempo = tempo;
}

/**Inserir os Competidores na primeira tabela quando clicar no botão */
function inserirCompetidor(){
  
  let nome = document.frm.nome.value;
  let tempo = document.frm.tempo.value;

  if(validarNome(nome) && validarTempo(tempo)){

    i = i + 1;
    document.getElementById("d").style.display="block";

    document.getElementById("inserir").disabled=false;
    document.getElementById("res").style.display="none";
    const c = new Competidor(i, nome, tempo);
    tabelaCompetidores(i, nome, tempo);
   
    listaCompetidores.push(c);

  }
  //listaCompetidores.forEach(imprimir);

}

/**
 * Montar a tabela de competidores na tela
 */
function tabelaCompetidores(a, b, c){

  let indice =a;
  let nome = b;
  let tempo = c;
  let l=document.createElement('tr');
  l.insertCell(0).innerHTML= indice;
  l.insertCell(1).innerHTML= nome;
  l.insertCell(2).innerHTML= tempo;

  document.getElementById("tdados").appendChild(l);
  return true;

}



function imprimir(array){
  for (let i = 0; i < array.length; i++){
    console.log(array);
  
}
  
}

/**
 * Ordenar a lista de competidores pelo tempo
 */
function ordenarPorTempo(a, b){
  return a.tempo - b.tempo;
}


 
/**
 * Mostrar resultado da competição na tela
 */
function insereResultado(){

  listaCompetidores.sort(ordenarPorTempo);
  //imprimir(listaCompetidores);
  document.getElementById("finalizar").style.display="none";
  document.getElementById("apagar").style.display="none";
  document.getElementById("inserir").style.display="none";
  document.getElementById("tdados").style.display="none";
  frm.tempo.disabled=true;
  frm.nome.disabled=true;
  //insere na tabela

  for(let cont = 0; cont < listaCompetidores.length; cont++){
    let primeiroTempo=listaCompetidores[0].tempo;
    let l=document.createElement('tr');
    l.insertCell(0).innerHTML= cont + 1;
    l.insertCell(1).innerHTML= listaCompetidores[cont].indice;
    l.insertCell(2).innerHTML= listaCompetidores[cont].nome;
    l.insertCell(3).innerHTML= listaCompetidores[cont].tempo;
    if(listaCompetidores[cont].tempo==primeiroTempo){
      l.insertCell(4).innerHTML="Vencedor(a)!";
    }else{
      l.insertCell(4).innerHTML="-";
    }
    document.getElementById("tresult").appendChild(l);
    document.getElementById("res").style.display="block";
  }

}

/**Recarregar página*/
function recarregar(){
  location.reload();
}

/**
 * Validar tempo inserido pelo usuário
 */
function validarTempo(campo){
  let n = campo;
  if(n.length == 0 || parseInt(n) <= 0){
      window.alert("Informe o valor do tempo corretamente");
      campo.value="";
      campo.focus();
      return false;
  
  }
  if(i >= 6){
    window.alert("Número máximo de competidores atingido!");
    return false;
  }


  return true;
}

/**Validar nome inserido pelo usuário */
function validarNome (campo){
  let n = campo;
  if(n.length == 0){
      window.alert("Informe o nome corretamente");
      campo.value="";
      campo.focus();
      return false;
  
  }
  if(i >= 6){
    window.alert("Número máximo de competidores atingido!");
    return false;
  }


  return true;
}