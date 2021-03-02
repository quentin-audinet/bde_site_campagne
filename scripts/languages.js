let dictionary = {
    fr: new Map(),
    en: new Map(),

    add(id,fr_trad,en_trad) {
        this.fr.set(id, fr_trad);
        this.en.set(id, en_trad);
    }
};
/* ----- DECLARER ICI TOUS LES TEXTES ----- */
dictionary.add("t_acceuil","Acceuil","Home");
dictionary.add("t_agenda", "Agenda", "Agenda");
dictionary.add("t_defis", "Défis", "Challenges");
dictionary.add("t_membres", "Membres", "Members");
dictionary.add("t_sponsors", "Sponsors", "Partners");
dictionary.add("t_photos", "Espace photos", "Photos");
dictionary.add("t_contact","Nous contacter", "Contact us");
dictionary.add("t_cgu", "Conditions générales d'utilisation", "Terms of use");



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
