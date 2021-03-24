let dictionary = {
    fr: new Map(),
    en: new Map(),

    add(id,fr_trad,en_trad) {
        this.fr.set(id, fr_trad);
        this.en.set(id, en_trad);
    }
};
/* ----- DECLARER ICI TOUS LES TEXTES ----- */
dictionary.add("t_acceuil","Accueil","Home");
dictionary.add("t_agenda", "Agenda", "Agenda");
dictionary.add("t_defis", "Défis", "Challenges");
dictionary.add("t_membres", "Membres", "Members");
dictionary.add("t_sponsors", "Sponsors", "Partners");
dictionary.add("t_photos", "Espace photos", "Photos");
dictionary.add("t_contact","Nous contacter", "Contact us");
dictionary.add("t_cgu", "Conditions générales d'utilisation", "Terms of use");
dictionary.add("t_news", "News", "News");
dictionary.add("t_carabed-defis", "Nos défis", "Our challenges");

dictionary.add("t_news_titre", "Toutes les news des Carabed", "All Carabed's news");
dictionary.add("t_defis_titre", "Tous nos défis", "All our challenges");
dictionary.add("t_sponsors_titre", "Nos sponsors", "Our partners");
dictionary.add("t_membres_titre", "Retrouvez tous les membres", "Find here our members");
dictionary.add("t_photos_titre", "Galerie photo des Carabed", "Photos of Carabed");
dictionary.add("t_contact_titre", "Nous contacter", "Contact us");



// Remplir les textes

const replaces_texts = (map) => {
    for(const [id,trad] of map.entries()) {
        for(let elt of document.getElementsByClassName(id)) {
            elt.innerHTML = trad;
        }
    }
};
const reload_language = () => {

    switch (document.documentElement.lang) {
        case "fr":
            replaces_texts(dictionary.fr);
            break;
        case "en":
            replaces_texts(dictionary.en);
            break;
        default:
            replaces_texts(dictionary.fr);
    }
}
reload_language();
