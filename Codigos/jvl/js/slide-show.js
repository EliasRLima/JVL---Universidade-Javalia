
function paraImagem1(n) {
  document.getElementById('img2').className = "circulo";
  document.getElementById('img3').className = "circulo";
  document.getElementById('img1').className = "circulo-ativo";
  document.getElementById("imagem-slide").src = document.getElementById("imgo1").src;
}

function paraImagem2(n) {
  document.getElementById('img1').className = "circulo";
  document.getElementById('img3').className = "circulo";
  document.getElementById('img2').className = "circulo-ativo";
  
  document.getElementById("imagem-slide").src = document.getElementById("imgo2").src;
}

function paraImagem3(n) {

  document.getElementById('img1').className = "circulo";
  document.getElementById('img2').className = "circulo";
  document.getElementById('img3').className = "circulo-ativo";
  document.getElementById("imagem-slide").src = document.getElementById("imgo3").src;

}

function paraProxima(n) {

  if(document.getElementById("imagem-slide").src==document.getElementById("imgo1").src){
    paraImagem2();
  }else if(document.getElementById("imagem-slide").src==document.getElementById("imgo2").src){
    paraImagem3();
  }else if(document.getElementById("imagem-slide").src==document.getElementById("imgo3").src){
    paraImagem1();
  }
}

function paraAnterior(n) {

  if(document.getElementById("imagem-slide").src==document.getElementById("imgo1").src){
    paraImagem3();
  }else if(document.getElementById("imagem-slide").src==document.getElementById("imgo2").src){
    paraImagem1();
  }else if(document.getElementById("imagem-slide").src==document.getElementById("imgo3").src){
    paraImagem2();
  }
}

function automatico(){
  paraProxima();
  setTimeout(automatico,5000);
}