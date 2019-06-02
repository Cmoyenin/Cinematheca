// Scrolling up & down

$(document).ready(function () {
    $('#myBtn').on('click', function (evt) {
        evt.preventDefault();
        var target = $(this).attr('href');
        $('html, body')
            .stop()
            .animate({scrollTop: $(target).offset().top}, 1000);
    });
});


// Show button on scroll

window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}


// Fonction search

function chercher() {

    // Vider la barre de recherche entre chaque requête
    $('#resultatRecherche').empty();

    //Récupération des data de l'input
    var textAChercher = $("#recherche").val();

    // Ne rien afficher quand il n'y pas de lettre dans ma recherche / passer à la suite du script
    if(textAChercher == ''){
        return;
    }

    // Ajax en post
    $.post(
        'http://localhost/arborescence/php/cinematheca/controller/recherche.php',
        {
            cherche: textAChercher
        }
    )
        // Rendu de la recherche
        .done(faireLeRenduDeRecherche);
       // .done(function (resultatDepuisPHP) {
       //      faireLeRenduDeRecherche(resultatDepuisPHP);
       //  });
}


// Récupération des données php en json et "traduction"
function faireLeRenduDeRecherche(lesResultatsJson) {
    lesResultats = JSON.parse(lesResultatsJson);

    lesResultats.forEach(renduUnResultat);
}

// Rendu visuel du résultat de la recherche
function renduUnResultat(unResultat) {
    $('#resultatRecherche').append(
        '<div class="col-12 col-md-4 d-flex justify-content-center pb-4 ">' +
        '<a href="film.php?id='+unResultat.id+'">' +
        '<img src="'+unResultat.url_affiche+'" alt="Image">' +
        '</a>' +
        '</div>');
}

$("#recherche").on('input', chercher);