function calcular(){

    let n1 = document.dados.valor1;
    let n2 = document.dados.valor2;

    if(validar(n1) && validar(n2)){
        let resultado = parseInt(n1.value) + parseInt(n2.value);
        document.dados.resultado.value = resultado;
    }
}
/**Passa o campo, não apenas o valor dele */
function validar (campo){
    let n = campo.value;
    if(n.length == 0 || isNaN (parseInt(n) ) ){
        window.alert("Informe o valor corretamente");
        campo.value="";
        campo.focus();
        return false;
    }
    return true;
}

/**Funções para validar o cadastro de música */
function vMusica(){

    let n1 = document.frm.nomeMusica;
    let n2 = document.frm.nomeCantor;
    let n3 = document.frm.genero;
    let n4 = document.frm.nomeCompositor;
    let n5 = document.frm.nomeAlbum;
    let n6 = document.frm.dataLanc;

    if(validarMusica(n1) && validarMusica(n2) && validarMusica(n3)
    && validarMusica(n4) && validarMusica(n5) && validarMusica(n6)){
        /**colocar dados em um objeto */
        
        const musica = new Musica(n1.value, n4.value, n2.value, n5.value, n3.value, n6.value);       
        window.alert('Cadastro realizado com sucesso: Música: '+ musica.nome + ' Cantor(a): ' + musica.cantor
        + ' Genero: ' + musica.genero + ' Compositor: ' + musica.compositor + ' album: ' + musica.album
        + ' Data ' + musica.data) ;
    }
}
function validarMusica(campo){
    let a = campo.value;
    if(a.length == 0){
        window.alert("O campo deve ser preenchido!");
        campo.value="";
        campo.focus();
        return false;
    }
    return true;

}
/**Objeto Musica */
function Musica(nome, compositor, cantor, album, genero, data){
    this.nome = nome;
    this.compositor = compositor;
    this.cantor = cantor;
    this.album = album;
    this.genero = genero;
    this.data = data;

}

