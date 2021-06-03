const botaoMobile = document.getElementById('botaoMobile')


function deslizarMenu(event){
    if (event.type === 'touchstart')event.preventDefault()
    const navMobile = document.getElementById('navMobile')
    navMobile.classList.toggle('navAtiva')
}

botaoMobile.addEventListener('click', deslizarMenu)
botaoMobile.addEventListener('touchstart', deslizarMenu)