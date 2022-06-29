/*const url = 'http://127.0.0.1:8000/api/listar-tudo';
const ul = document.getElementById('authors');

fetch(url)
.then(function() {

})
.catch(function() {

});


    axios.get(`http://127.0.0.1:8000/api/listar-tudo`)
    .then((resposta) => {
      console.log(resposta.data);
      alert(`CEP: ${resposta.data.cep}`);
      alert(`Rua: ${resposta.data.logradouro}`);
      alert(`Bairro: ${resposta.data.bairro}`);
      alert(`Cidade: ${resposta.data.localidade}`);
      alert(`Estado: ${resposta.data.uf}`);
      alert(`DDD: ${resposta.data.ddd}`);
      alert(`IBGE: ${resposta.data.ibge}`); 
      this.logradouro = resposta.data.logradouro;
      this.bairro = resposta.data.bairro;
      this.localidade = resposta.data.localidade;
      this.uf = resposta.data.uf;
      this.ddd = resposta.data.ddd;
      this.ibge = resposta.data.ibge;
      });
  },*/
  console.log('aqui');

$(document).ready(function () {
    // FETCHING DATA FROM JSON FILE
    console.log('aqui2');
    $.get(`http://127.0.0.1:8000/api/listar-tudo`).then((resposta) => {
        //montarTabela();
        //var start = Date.now();
        //const inicio = new Date().getTime()
        // trecho de código que queremos mensurar
        /*json.sort(function(a,b) {
            return a.nome_do_aluno_diplomado < b.nome_do_aluno_diplomado ? -1 : a.nome_do_aluno_diplomado > b.nome_do_aluno_diplomado ? 1 : 0;
        });*/
        //ar inicio = new Date().getTime();
        //console.time('Tempo Bolha: ');

        //console.timeEnd('Tempo Bolha: ');

        //selectionSort(json)
        //var fim = new Date().getTime();
        //var tempo = fim - inicio;
        //convertido = new String(tempo);
        //console.log(tempo);
        //console.log(convertido);

        //montarTabela();
        //alert("Tempo para BubleSort ≅  " + convertido + " ms");
        console.log(resposta);
        document.getElementById.innerHTML(resposta);
    });
});