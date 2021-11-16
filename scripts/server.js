$(document).ready(function () {

    console.log('Ready !!!');

    setTimeout(function () { // Affichage page Entry pendant 5 sec et scroll jusqu'à page Home (menu)
        // let page = '#entry';
        // if ($(this).attr('href') == page){
        $('html, body').animate({ scrollTop: $('#home').offset().top }, 750);
        // }
    }, 3000);

    $('.js-scrollTo').on('click', function () { // Au clic sur un élément
        let page = $(this).attr('href'); // Page cible sélectionnée
        // console.log('Cible : ' + page);
        if (page == "#professionalResume") { // Temporisation pour fluidifier le défilement
            timer = 750;
        } else if (page == "#degrees") {
            timer = 1250;
        } else if (page == "#personalProjects") {
            timer = 1750;
        } else if (page == "#dwmg1Formation") {
            timer = 2250;
        } else if (page == "#dfs17Formation") {
            timer = 2750;
        } else if (page == "#cdpi6Formation") {
            timer = 3250;
        }
        let speed = timer; // Durée du défilement (en ms)
        // console.log('Tempo : ' + speed);
        $('html, body').animate({ scrollTop: $(page).offset().top }, speed); // Go à la page séletionnée
        return false;
    });

    $('.js-scrollMenu').on('click', function () { // Au clic sur bouton menu des footers
        let page = $(this).attr('href'); // Page cible : Home
        // console.log('Cible : ' + page);
        let speed = 1000; // Durée du défilement (en ms)
        $('html, body').animate({ scrollTop: $(page).offset().top }, speed); // Go
        return false;
    });
});

const getModalText = (id) => {

    const mcText = document.querySelector('#mc-text');
    const url = './config/config_ajax.php';
    const options = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/text'
        },
        body: /*'id=' + */id
    };

    fetch(url, options)
        .then(response => {
            if (!response.ok) {
                throw new Error("Problème - code d'état HTTP : " + response.status);
            }
            return response.text();
        })

        .then(contenu => {
            if (mcText != null) {
                mcText.innerHTML = contenu;
            }
        })

        .catch((err) => {
            console.log(err.toString());
            if (mcText != null) {
                mcText.innerHTML = "Un problème nous empêche de compléter le traitement demandé.";
            }
        })
}