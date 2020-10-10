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

