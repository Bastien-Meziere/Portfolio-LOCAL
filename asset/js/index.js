/* Fonction qui permet d'afficher le loader puis de l'enlever après 1.5s */
function showContent() {
    document.querySelector('.loader-container').classList.add('hidden')
}

setTimeout(showContent, 1500);

/* Fonction du titre "Bastien Mézière Développeur Web" dans le header */
    async function init () {
    const node = document.querySelector("#type-text")

    await sleep(1000)
    node.innerText = ""

    while (true) {
        await node.type('Bastien Mézière \nDéveloppeur Web')
        await sleep(4000)
        await node.delete('Bastien Mézière \nDéveloppeur Web')
        await node.type('Bastien Mézière \nDéveloppeur Web')
        await sleep(4000)
        await node.delete('Bastien Mézière \nDéveloppeur Web')
    }
}
  
const sleep = time => new Promise(resolve => setTimeout(resolve, time))

class TypeAsync extends HTMLSpanElement {
get typeInterval () {
    const randomMs = 120 * Math.random()
    return randomMs < 50 ? 10 : randomMs
}

async type (text) {
    for (let character of text) {
    this.innerText += character
    await sleep(this.typeInterval)
    }
}

async delete (text) {
    for (let character of text) {
    this.innerText = this.innerText.slice(0, this.innerText.length -1)
    await sleep(this.typeInterval)
    }
}
}

customElements.define('type-async', TypeAsync, { extends: 'span' })

init()

/* Fonction qui permet d'animer le forme-propos lors du scroll vers le bas */
const slidingFormePropos = document.querySelector('.forme-propos')

window.addEventListener('scroll', () => {
    const {scrollTop, clientHeight} = document.documentElement;

    const topElementToTopViewport = slidingFormePropos.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.77) {
        slidingFormePropos.classList.add('active')
    }
})

/* Fonction qui permet d'animer le forme-propos2 lors du scroll vers le bas */
const slidingFormePropos2 = document.querySelector('.forme-propos2')

window.addEventListener('scroll', () => {
    const {scrollTop, clientHeight} = document.documentElement;

    const topElementToTopViewport = slidingFormePropos2.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.77) {
        slidingFormePropos2.classList.add('active')
    }
})

/* Fonction qui permet d'animer le formulaire de contact lors du scroll vers le bas */
const slidingForm = document.querySelector('form')

window.addEventListener('scroll', () => {
    const {scrollTop, clientHeight} = document.documentElement;

    const topElementToTopViewport = slidingForm.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.10) {
        slidingForm.classList.add('active')
    }
})