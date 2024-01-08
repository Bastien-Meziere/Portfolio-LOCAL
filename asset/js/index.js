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

/* Fonction qui permet d'animer le bouton-propos lors du scroll vers le bas */
const slidingBtnPropos = document.querySelector('.bouton-propos')

window.addEventListener('scroll', () => {
    const {scrollTop, clientHeight} = document.documentElement;

    const topElementToTopViewport = slidingBtnPropos.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.65) {
        slidingBtnPropos.classList.add('active')
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

/* Fonction qui permet d'afficher les sections compétence, formation et experience dans "A propos" lors du clic bouton */
const button1 = document.getElementById('btn-comp');
const button2 = document.getElementById('btn-formation');
const button3 = document.getElementById('btn-exp');
const element1 = document.getElementById('comp');
const element2 = document.getElementById('form');
const element3 = document.getElementById('exp');

button1.addEventListener('click', function() {
  element1.style.display = 'block';
  element2.style.display = 'none';
  element3.style.display = 'none';
});
button2.addEventListener('click', function() {
    element1.style.display = 'none';
    element2.style.display = 'block';
    element3.style.display = 'none';
  });
  button3.addEventListener('click', function() {
    element1.style.display = 'none';
    element2.style.display = 'none';
    element3.style.display = 'block';
  });