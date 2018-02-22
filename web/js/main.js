// fonction pour le form
$(document).ready(function () {
    // Récupération de la balise <div> qui contient l'attribut "data-prototype"
    var $container = $('div#advert_categories');
    // Définition d'un compteur unique pour nommer les champs que l'on veut ajouter dynamiquement
    var index = $container.find('input').length;
    // Ajout d'un nouveau champ à chaque clic sur le lien d'ajout
    $('#add_category').click(function (e) {
        addCategory($container);
        e.preventDefault(); // évite le # dans l'url
        return false;
    });
    // Ajout d'un premier champ automatique si aucun champ déclaré 02/02/18
    if (index == 0) {
        addCategory($container);
    }
    else {
        // Si déjà catégories, on ajoute un lien de suppr pour chacune d'entre elle
        $container.children('div').each(function () {
            addDeleteLink($(this));
        });
    }
    // Fonction add form CategoryType 02/02/18
    function addCategory($container) {
        // On remplace le contenu de l'attribut "data-prototype"
        // On remplace : texte "__name__label__" qu'il contient par le label champ
        // et le texte : texte "__name__" qu'il contient par le n° du chamo
        var template = $container.attr('data-prototype')
            .remplace(/__name__label__/g, 'Catégorie n°' + (index + 1))
            .remplace(/__name__/g, index);
        // Création d'un objet Query qui contient le template 02/02/18
        var $prototype = $(template);
        // Ajout du suppr au prototype 02/02/18
        addDeleteLink($prototype);
        // Ajout du proto mod à la fin de la balise <div> 02/02/18
        $container.append($prototype);
        // Puis on incrémente le compteur
        index++;
    }
    // Fonction qui add un lien de supp d'une catégorie
    function addDeleteLink($prototype) {
        // création du lien
        var $deleteLink = $('<a href="#" class="waves-effect waves-light btn-large blue">Supprimer</a>');
        // ajout du lien
        $prototype.append($deleteLink);
        // Ajout du listener sur le clic du lien pour suppr
        $deleteLink.click(function (e) {
            $prototype.remove();
            e.preventDefault(); // Pas de # dans l'url
            return false;
        });
    }
// fonction datepicker
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 2, // Creates a dropdown of 15 years to control year
        labelMonthNext: 'Mois suivant',
        labelMonthPrev: 'Mois précédent',
        labelMonthSelect: 'Selectionner le mois',
        labelYearSelect: 'Selectionner une année',
        monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ],
        monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
        weekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
        weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
        weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
        firstDay:1,
        today: 'Aujourd\'hui',
        clear: 'Effacer',
        close: 'Fermer',
        format: 'dd/mm/yyyy'
    });
});
