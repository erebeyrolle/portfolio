$(document).ready(function(){

        console.log('Ready !!!');
        // alert('Bonne Année 2020, à toutes & à tous.');
        
        setTimeout(function(){ // Affichage page Entry pendant 5 sec et scroll jusqu'à page Home (menu)
            // let page = '#entry';
            // if ($(this).attr('href') == page){
                $('html, body').animate( { scrollTop: $('#home').offset().top }, 750 );
            // }
        }, 3000);


        $('.js-scrollTo').on('click', function() { // Au clic sur un élément
            let page = $(this).attr('href'); // Page cible sélectionnée
            // console.log('Cible : ' + page);
            if (page == "#professionalResume"){ // Temporisation pour fluidifier le défilement
                timer = 750;
            }else if (page == "#degrees"){
                timer = 1250;
            }else if (page == "#personalProjects"){
                timer = 1750;
            }else if (page == "#dwmg1Formation"){
                timer = 2250;
            }else if (page == "#dfs17Formation"){
                timer = 2750;
            }else if (page == "#cdpi6Formation"){
                timer = 3250;
            }
            let speed = timer; // Durée du défilement (en ms)
            // console.log('Tempo : ' + speed);
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go à la page séletionnée
            return false;
        });

        $('.js-scrollMenu').on('click', function(){ // Au clic sur bouton menu des footers
            let page = $(this).attr('href'); // Page cible : Home
            // console.log('Cible : ' + page);
            let speed = 1000; // Durée du défilement (en ms)
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
            return false;
        });
});