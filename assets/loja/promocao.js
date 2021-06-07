let promocaoIndex = 0
let time = clearTimeout
mostrarPromocao();

function promocaoAtual(promocaoAtual){
    mostrarPromocao(promocaoAtual)
}

function mostrarPromocao(promocaoAtual){
    let i;
    let promocoes = document.getElementsByClassName("promocao");
    let botaoPonto = document.getElementsByClassName("botaoPonto")
    for (i = 0; i < promocoes.length; i++){
        promocoes[i].style.display = "none"
    }
    for(i=0; i< botaoPonto.length; i++){
        botaoPonto[i].className = "botaoPonto"
    }
    if(promocaoAtual != null){
    if(promocaoAtual != promocaoIndex){
        promocaoIndex = promocaoAtual
        promocoes[promocaoIndex].style.display = "block"
        botaoPonto[promocaoIndex].className += ` ativo`
        time = clearTimeout()
    }else{
        promocoes[promocaoIndex].style.display = "block"
        botaoPonto[promocaoIndex].className += ` ativo`
        time = clearTimeout()
    }
    }else{
        promocoes[promocaoIndex].style.display = "block"
        botaoPonto[promocaoIndex].className += ` ativo`
        promocaoIndex++;
        if(promocaoIndex >= promocoes.length){
            promocaoIndex = 0
        }
        time = clearTimeout()
    }
    time = setTimeout(mostrarPromocao, 15000)
}

