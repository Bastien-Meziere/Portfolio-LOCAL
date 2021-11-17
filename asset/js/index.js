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