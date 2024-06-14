/**
 * gère le style des curseurs 
 */
let cursor1 = document.querySelector('#cursor-1'),
    cursor2 = document.querySelector('#cursor-2');

// document.body.onpointermove = event => 
// {
//     const { clientX, clientY } = event;
    
//         cursor1.animate({
//             left: `${clientX}px`,
//             top: `${clientY}px`
        
//         }, {duration: 1000, fill: "forwards"})
    
//         cursor2.animate({
//             left: `${clientX}px`,
//             top: `${clientY}px`
        
//         }, {duration: 100, fill: "forwards"})
    
// }


/**
 * gère le style du bouton 'Acheter maintenant' 
 */
let elProgress = document.querySelector('[data-js-progress]');

if (elProgress) 
{
    let elProgressBar = elProgress.querySelector('[data-js-progress-bar]');
    
    elProgress.addEventListener('mouseover', function()
    {
        elProgressBar.style="width:100%";
    });
    elProgress.addEventListener('mouseout', function()
    {
        elProgressBar.style="width:43%";
    });
}

/**
 * gère le style du header 
 */
let elHeader = document.querySelector('header');

window.addEventListener('scroll', ()=> 
{
    let scrolled = window.scrollY;
  
    if (scrolled > 0 ) elHeader.classList.add('header-sticky');
    else elHeader.classList.remove('header-sticky');

})


/**
 * affiche le plan tarifaire par mois ou par an
 */
let elCheckbox = document.querySelector('#tarif'),
    tarifsContainer = document.querySelector('[data-js-tarifs]');

    
if (elCheckbox) 
    {
    // initialise le dom au chargement de la page
    window.addEventListener('DOMContentLoaded',function(){new Plans(tarifsContainer);})
    
    // basculer entre plan mensuel et plan annuel
    elCheckbox.addEventListener('click', function()
    {
        // vider le dom actuel
        tarifsContainer.innerHTML ='';
        
        // réinjecte le dom
        new Plans(tarifsContainer);
    })
    
    class Plans 
    {
        #_el;
        
        constructor(el) 
        {
            this.#_el = el; 
            this.#init();
        }
    
        #init() 
        {
            let discount = 0.8,
                paymentTerm = 'Mensuel',
                aInfo = [
                {
                    'plan': 'Basci',
                    'tarif':'01.00', 
                    'img': "assets/img/png/plan-basic.png",
                    'alt':' Une fusée s\'élève dans le ciel'
                },
                {
                    'plan': 'Standard',
                    'tarif':'02.00',
                    'img': "assets/img/png/plan-standard.png",
                    'alt':'Un homme tire une flèche de la cible' 
                },
                {
                    'plan': 'Silver',
                    'tarif':'03.00', 
                    'img': "assets/img/png/plan-silver.png",
                    'alt':'Un homme tenant un drapeau rouge au sommet d’une montagne' 
                },
            ];
    
            for (let i = 0, l = aInfo.length; i < l; i++) 
            {
                // si paiement annuel
                if(elCheckbox.checked)
                {
                    aInfo[i].tarif =  (aInfo[i].tarif  * 12 * discount).toFixed(2);
                    paymentTerm = 'Annuel';
                }

                this.#createDom(aInfo[i], paymentTerm);
            }
        }
    
        // créer le dom selon le délai de paiement
        #createDom(plan, paymentTerm) 
        {
            let dom = 
                    `
                        <div class="tarif d-flex flex-column align-items-center py-5">
                            <div class="tarif-name mt-3">${plan.plan} Plan</div>
                            <div class="tarif-amount" >
                                <sup clas="tarif-dollar">$</sup><span data-js-tarif="standard">${plan.tarif}</span><span class="tarif-time">/${paymentTerm}</span>
                            </div>
                            <div class="tarif-image mt-4 ">
                                <img src="${plan.img}" alt="${plan.alt}">
                            </div>
                            <div class='tarif-items my-5 d-flex flex-column gap-4'>
                                <div class="tarif-item d-flex">
                                    <div class="icon-tick me-3">
                                        <i class="fa-solid fa-check" style="color: #ffffff;"></i>
                                    </div>
                                    Lorem Ipsum Texte
                                </div>
                                <div class="tarif-item d-flex">
                                    <div class="icon-tick me-3">
                                        <i class="fa-solid fa-check" style="color: #ffffff;"></i>
                                    </div>
                                    Lorem Ipsum Texte
                                </div>
                                <div class="tarif-item d-flex">
                                    <div class="icon-tick me-3">
                                        <i class="fa-solid fa-check" style="color: #ffffff;"></i>
                                    </div>
                                    Lorem Ipsum Texte
                                </div>
                                <div class="tarif-item tarif-item-disabled d-flex">
                                    <div class="icon-tick icon-tick-disabled me-3">
                                        <i class="fa-solid fa-check" style="color: #ffffff;"></i>
                                    </div>
                                    Lorem Ipsum Texte
                                </div>
                                <div class="tarif-item tarif-item-disabled d-flex">
                                    <div class="icon-tick icon-tick-disabled me-3">
                                        <i class="fa-solid fa-check" style="color: #ffffff;"></i>
                                    </div>
                                    Lorem Ipsum Texte
                                </div>
                            </div>
                            <div class="mb-5">
                                <a class="btn" href=""><span class="bold">Choisir </span>un forfait</a>
                            </div>
                        </div>
                    `;

            this.#_el.insertAdjacentHTML('beforeend', dom);
        }
    }
}

/**
 * Contrôle la vidéo à la bannière hero à la page d'accueil de Proximity
 */

let btnPlay = document.querySelector('[data-js-btn-play]'),
    btnPause = document.querySelector('[data-js-btn-pause]'),  
    constainerVideo = document.querySelector('[data-js-video]'),
    video = constainerVideo.querySelector('video'),
    banner = document.querySelector('[data-js-home-banner]'),
    elsVisual = document.querySelectorAll('[data-js-visual]');

// Démarrer la vidéo au clic du bouton de play
btnPlay.addEventListener('click',function()
{
    video.play();

    // Remonter la vidéo en haut 
    constainerVideo.classList.add('home-banner-video-open');

    // Basculer entre le bouton de démarrage et le bouton d'arrêt
    btnPlay.classList.add('visual-hidden');
    btnPause.classList.remove('visual-hidden');

    // Faire disparaitre la bannière héro lorsque le déroulement de la vidéo sur la version mobile
    banner.classList.add('home-banner-close');

    // Cacher les éléments visuels lorsque le déroulement de la vidéo
    for (let i = 0, l = elsVisual.length; i < l; i++) 
    {
        elsVisual[i].style = "display:none";
    }

    // Arrêter la vidéo au clic du bouton d'arrêt
    btnPause.addEventListener('click', function()
    {
        video.pause();
        btnPause.classList.add('visual-hidden');
        btnPlay.classList.remove('visual-hidden');
    })
})

// Gérer l'effet visuel lorsque le souris survole sur le bouton
btnPlay.addEventListener('mouseover',function(e){
    e.target.classList.remove('animated');
})

btnPlay.addEventListener('mouseout',function(e){
    e.target.classList.add('animated');
})







