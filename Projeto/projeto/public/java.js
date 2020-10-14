function Play(numeroAudio) {
    
      playAudio = document.getElementById('audio'+ numeroAudio);
      playAudio.play();
     
}

function Pause(numeroAudio){
  
    pauseAudio = document.getElementById('audio'+ numeroAudio);
    pauseAudio.pause();
    
}

function Stop(numeroAudio){
  
  stopAudio = document.getElementById('audio'+numeroAudio);
  stopAudio.pause();
  stopAudio.currentTime = 0;
  
}

function carregarOpcoes(){

  
  let op = document.formulario.busca.value;
  if(op != "SELECIONE"){
  
    document.getElementById("botao").style.display="block";
    document.getElementById("generos").style.display="block";   

  }
}

function voltar(){
  document.getElementById("cadastrarPlaylist").style.display="none";
  document.getElementById("adicionarNaPlaylist").style.display="none";
  document.getElementById("botaoPlay").style.display="block";
  document.getElementById("botaoAdd").style.display="block";
}

function criarPlaylist(){
  document.getElementById("cadastrarPlaylist").style.display="block";
  document.getElementById("botaoPlay").style.display="none";
  document.getElementById("botaoAdd").style.display="none";
    
}

function adicionarNaPlaylist(){
  document.getElementById("adicionarNaPlaylist").style.display="block";
  document.getElementById("botaoPlay").style.display="none";
  document.getElementById("botaoAdd").style.display="none";
}

