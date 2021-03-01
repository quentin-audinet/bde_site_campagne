let dictionary = {
    fr: new Map(),
    en: new Map(),

    add(id,fr_trad,en_trad) {
        this.fr.set(id, fr_trad);
        this.en.set(id, en_trad);
    }
};
/* ----- DECLARER ICI TOUS LES TEXTES ----- */
dictionary.add("t_acceuil","Acceuil","TODO");
dictionary.add("t_agenda", "Agenda", "TODO");
dictionary.add("t_defis", "Défis", "TODO");


// Remplir les textes

const replaces_texts = (map) => {
    for(const [id,trad] of map.entries()) {
        document.getElementById(id).innerHTML = trad;
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
