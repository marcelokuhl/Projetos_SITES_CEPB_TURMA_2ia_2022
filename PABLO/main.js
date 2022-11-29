//script busca catálogo

let input = document.getElementById('input');
let busca;
let cards = document.querySelectorAll('.product-card');
let titulos = document.querySelectorAll('.titulo-produto');

input.addEventListener('input', ()=>{
    document.getElementById('titulo-busca').setAttribute('style', 'display: none;');
    let clone = "";
    let contador = 0;
    busca = input.value;
    busca = busca.toLowerCase();
    let div = document.getElementById('pesquisa');
    div.innerHTML = null;
    input.value = busca;
    if (busca == "") {
        return;
    }

    for (let index = 0; index < titulos.length; index++) {

       if (titulos[index].innerHTML.includes(busca)) {
        
            document.getElementById('titulo-busca').setAttribute('style', 'display: block;');
            clone = cards[index].cloneNode(true);
            div.appendChild(clone); 
            contador++;

            if (contador==3) {
                contador = 0;
                return;
            }
       }
    }
});

//script carrinho
