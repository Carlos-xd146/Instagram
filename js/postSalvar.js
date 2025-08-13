// se clicar no botao, pega o que escreveu e envia para PostSalvar

btnPostSalvar = document.getElementById("btnPostSalvar")

btnPostSalvar.addEventListener('click', ()=>{
  alert("OK!");
  urlImagem = document.getElementById("urlImagem").files[0].name;
  alert(urlImagem)
  descricao = document.getElementById("descricao").value;
  alert(descricao)


})