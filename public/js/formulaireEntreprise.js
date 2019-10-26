"use strict";
let select = '';
let pourcentage = '';
function popup() {
    new Calendrier();
    document.querySelector('#popup-base').style = 'display:block';
}
function cancel() {
    document.querySelector('.popup_cancel_base').style = 'display:block';
}
function reload() {
    location.href = "https://www.oneclickdj.fr/";
}
let radio3 = document.querySelector('[for="form_entreprise_formule_3"]');
let radio2 = document.querySelector('[for="form_entreprise_formule_2"]');
let radio1 = document.querySelector('[for="form_entreprise_formule_1"]');
let form_duree = document.querySelector('.form_duree');
let form_personne = document.querySelector('.form_personne');
radio3.addEventListener('click', () => {
    let selected = document.querySelector('.selectedRadio');
    if (selected)
        selected.classList.remove('selectedRadio');
    radio3.classList.add('selectedRadio');
    if (form_duree.style = 'display:block')
        form_duree.style = 'display:none';
    document.querySelector('.form_personne').style = 'display:block';
});
radio2.addEventListener('click', () => {
    let selected = document.querySelector('.selectedRadio');
    if (selected)
        selected.classList.remove('selectedRadio');
    radio2.classList.add('selectedRadio');
    if (form_duree.style = 'display:block')
        form_duree.style = 'display:none';
    document.querySelector('.form_personne').style = 'display:block';
});
radio1.addEventListener('click', () => {
    let selected = document.querySelector('.selectedRadio');
    if (selected)
        selected.classList.remove('selectedRadio');
    radio1.classList.add('selectedRadio');
    if (form_personne.style = 'display:block')
        form_personne.style = 'display:none';
    document.querySelector('.form_duree').style = 'display:block';
});
let radioPersonne3 = document.querySelector('[for="form_entreprise_nb_personne_formule_3"]');
let radioPersonne2 = document.querySelector('[for="form_entreprise_nb_personne_formule_2"]');
let radioPersonne1 = document.querySelector('[for="form_entreprise_nb_personne_formule_1"]');
radioPersonne1.addEventListener('click', () => {
    let selected = document.querySelector('.selectedPersonneRadio');
    if (selected)
        selected.classList.remove('selectedPersonneRadio');
    radioPersonne1.classList.add('selectedPersonneRadio');
    document.querySelector('.form_duree').style = 'display:block';
});
radioPersonne2.addEventListener('click', () => {
    let selected = document.querySelector('.selectedPersonneRadio');
    if (selected)
        selected.classList.remove('selectedPersonneRadio');
    radioPersonne2.classList.add('selectedPersonneRadio');
    document.querySelector('.form_duree').style = 'display:block';
});
radioPersonne3.addEventListener('click', () => {
    let selected = document.querySelector('.selectedPersonneRadio');
    if (selected)
        selected.classList.remove('selectedPersonneRadio');
    radioPersonne3.classList.add('selectedPersonneRadio');
    document.querySelector('.form_duree').style = 'display:block';
});
let radioDuree3 = document.querySelector('[for="form_entreprise_duree_formule_3"]');
let radioDuree2 = document.querySelector('[for="form_entreprise_duree_formule_2"]');
let radioDuree1 = document.querySelector('[for="form_entreprise_duree_formule_1"]');
radioDuree1.addEventListener('click', () => {
    let selected = document.querySelector('.selectedDureeRadio');
    if (selected)
        selected.classList.remove('selectedDureeRadio');
    radioDuree1.classList.add('selectedDureeRadio');
});
radioDuree2.addEventListener('click', () => {
    let selected = document.querySelector('.selectedDureeRadio');
    if (selected)
        selected.classList.remove('selectedDureeRadio');
    radioDuree2.classList.add('selectedDureeRadio');
});
radioDuree3.addEventListener('click', () => {
    let selected = document.querySelector('.selectedDureeRadio');
    if (selected)
        selected.classList.remove('selectedDureeRadio');
    radioDuree3.classList.add('selectedDureeRadio');
});
let radioHabillage1 = document.querySelector('[for="form_entreprise_habillage_1"]');
let radioHabillage2 = document.querySelector('[for="form_entreprise_habillage_2"]');
radioHabillage1.addEventListener('click', () => {
    let selected = document.querySelector('.selectedHabillageRadio');
    if (selected)
        selected.classList.remove('selectedHabillageRadio');
    radioHabillage1.classList.add('selectedHabillageRadio');
});
radioHabillage2.addEventListener('click', () => {
    let selected = document.querySelector('.selectedHabillageRadio');
    if (selected)
        selected.classList.remove('selectedHabillageRadio');
    radioHabillage2.classList.add('selectedHabillageRadio');
});
function poursuivre() {
    document.querySelector('.popup_cancel_base').style = 'display:none';
}
function suivant() {
    document.querySelector('#formulaire').style = 'display:block';
    document.querySelector('.popup').style = 'display:none';
}
function suivant2() {
    let date = new Date();
    let ojd = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    if(new Date(select) > ojd){
        document.querySelector('.form_calendrier').style = 'display:none';
        document.querySelector('.form_nom_du_lieu').style = 'display:block';
        let progress = document.querySelector('.progress-bar');
        progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
        pourcentage = progress.attributes[2].value;
        progress.style = `width: ${progress.attributes[2].value}%`;
        document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
        let sr = document.querySelector('.sr-only');
        sr.textContent = progress.attributes[2].value+'%'
   }
}
function retour2(){
    document.querySelector('.popup').style = 'display:block';
    document.querySelector('#formulaire').style = 'display:none';
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent - Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}

function suivantNom() {
    let input = document.querySelector('#form_entreprise_formulaire_base_nom_du_lieu');
    let input2 = document.querySelector('#form_entreprise_adresse_du_lieu');
    if(input.value !== '' && input2.value !== '') {
        document.querySelector('.form_nom_du_lieu').style = 'display:none';
        document.querySelector('.form_evenement').style = 'display:block';
        let progress = document.querySelector('.progress-bar');
        progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
        progress.style = `width: ${progress.attributes[2].value}%`;
        document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
        let sr = document.querySelector('.sr-only');
        sr.textContent = progress.attributes[2].value+'%';
    }
}
function retourNom(){
    document.querySelector('.form_nom_du_lieu').style = 'display:none';
    document.querySelector('.form_calendrier').style = 'display:block';
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent - Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}
function suivantEvenement() {
    let heure = document.querySelector('#form_entreprise_formulaire_base_heure_de_debut_hour');
    let minute = document.querySelector('#form_entreprise_formulaire_base_heure_de_debut_minute');
    if (heure.value !== '0' || minute.value !== '0') {
        document.querySelector('.form_evenement').style = 'display:none';
        document.querySelector('.form_formule').style = 'display:block';
        let progress = document.querySelector('.progress-bar');
        progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
        progress.style = `width: ${progress.attributes[2].value}%`;
        document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
        let sr = document.querySelector('.sr-only');
        sr.textContent = progress.attributes[2].value+'%';
    }
}
function retourEvenement(){
    document.querySelector('.form_nom_du_lieu').style = 'display:block';
    document.querySelector('.form_evenement').style = 'display:none';
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent - Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}
function suivantFormule() {
    let select = document.querySelector('.selectedDureeRadio');
    if(select) {
        document.querySelector('.form_formule').style = 'display:none';
        document.querySelector('.form_theme').style = 'display:block';
        let progress = document.querySelector('.progress-bar');
        progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
        progress.style = `width: ${progress.attributes[2].value}%`;
        document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
        let sr = document.querySelector('.sr-only');
        sr.textContent = progress.attributes[2].value+'%';
        document.querySelectorAll('.pull-left').textContent= 'Sélectionner';
    }
}
function retourFormule(){
    document.querySelector('.form_evenement').style = 'display:block';
    document.querySelector('.form_formule').style = 'display:none';
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent - Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}
function suivantTheme() {
    let input = document.querySelector('#form_entreprise_theme');
    let span = document.querySelectorAll('.pull-left');
    if (input.value != '' ) {
        document.querySelector('.form_theme').style = 'display:none';
        document.querySelector('.form_dj').style = 'display:block';
        let progress = document.querySelector('.progress-bar');
        progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
        progress.style = `width: ${progress.attributes[2].value}%`;
        document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
        let sr = document.querySelector('.sr-only');
        sr.textContent = progress.attributes[2].value+'%'
    }
}
function retourTheme(){
    document.querySelector('.form_theme').style = 'display:none';
    document.querySelector('.form_formule').style = 'display:block';
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent - Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}
function suivantDj() {
    let select = document.querySelector('#form_entreprise_style_dj');
    if(select.value !== 'Sélectionner') {
        document.querySelector('.form_dj').style = 'display:none';
        document.querySelector('.form_habillage').style = 'display:block';
        let progress = document.querySelector('.progress-bar');
        progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
        progress.style = `width: ${progress.attributes[2].value}%`;
        document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
        let sr = document.querySelector('.sr-only');
        sr.textContent = progress.attributes[2].value+'%';
    }
}
function retourDj(){
    document.querySelector('.form_dj').style = 'display:none';
    document.querySelector('.form_theme').style = 'display:block';
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent - Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}
function suivantHabillage() {
    let habillage = document.querySelector('.selectedHabillageRadio');
    if (habillage) {
        document.querySelector('.form_habillage').style = 'display:none';
        document.querySelector('.form_options').style = 'display:block';
        let progress = document.querySelector('.progress-bar');
        progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
        progress.style = `width: ${progress.attributes[2].value}%`;
        document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
        let sr = document.querySelector('.sr-only');
        sr.textContent = progress.attributes[2].value+'%';
    }
}
function retourHabillage(){
    document.querySelector('.form_dj').style = 'display:block';
    document.querySelector('.form_habillage').style = 'display:none';
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent - Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}
function suivantOptions() {
        document.querySelector('.form_options').style = 'display:none';
        document.querySelector('.form_fonction').style = 'display:block';
        let progress = document.querySelector('.progress-bar');
        progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
        progress.style = `width: ${progress.attributes[2].value}%`;
        document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété 100% de votre demande`;
        let sr = document.querySelector('.sr-only');
        sr.textContent = '100%';
}
function retourOptions(){
    document.querySelector('.form_habillage').style = 'display:block';
    document.querySelector('.form_options').style = 'display:none';
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent - Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}
function suivantEmail() {
    let email = document.querySelector('#formulaire_email');
    let regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if(regex.test(email.value)) {
        document.querySelector('.form_email').style = 'display:none';
        document.querySelector('.form_numero').style = 'display:block';
        document.querySelector('.cache').style = 'display:block';
        let progress = document.querySelector('.progress-bar');
        progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
        progress.style = `width: ${progress.attributes[2].value}%`;
        document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété 100% de votre demande`;
        let sr = document.querySelector('.sr-only');
        sr.textContent = '100%';
    }
}
function retourEmail(){
    document.querySelector('.form_nom').style = 'display:block';
    document.querySelector('.form_email').style = 'display:none';
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent - Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}
function suivantGet() {
    nom_re = document.querySelector('#form_entreprise_nom_responsable');
    nom_re = document.querySelector('#form_entreprise_nom_responsable');
    document.querySelector('#formulaire').style = 'display:none';
    document.querySelector('.popup-get').style = 'display:block';
}
let input_form = document.querySelector('#form_entreprise_formulaire_base_nb_personne');
input_form.addEventListener('input', () => {
    let personne = document.querySelector('.personne');
    personne.textContent = `${input_form.value} Personnes`;
})
let input_age = document.querySelector('#form_entreprise_age');
input_age.addEventListener('input', () => {
    let ans = document.querySelector('.ans');
    ans.textContent = `${input_age.value} ans`;
})
function recuperation(date, num) {
    let tda = document.querySelector('.selected');
    if (tda)
        tda.classList.remove('selected');
    let td = document.querySelector(`#td${num}`);
    td.classList.add('selected');
    select = date;
    let div = document.querySelector('#form_entreprise_formulaire_base_date');
    div.value = date;
}
String.prototype.ucFirst=function(){
    return this.substr(0,1).toUpperCase()+this.substr(1);
}
let options1 = false;
let options2 = false;
let options3 = false;
let options4 = false;
let checkBox1 = document.querySelector('[for="form_entreprise_options_0"]');
let checkBox2 = document.querySelector('[for="form_entreprise_options_1"]');
let checkBox3 = document.querySelector('[for="form_entreprise_options_2"]');
let checkBox4 = document.querySelector('[for="form_entreprise_options_3"]');
checkBox1.addEventListener('click', () => {
    if (!options1) {
        checkBox1.classList.add('selectedOptions');
        options1 = true;
    }
    else{
        checkBox1.classList.remove('selectedOptions');
        options1 = false;
    }
});
checkBox2.addEventListener('click', () => {
    if (!options2) {
        checkBox2.classList.add('selectedOptions');
        options2 = true;
    }
    else{
        checkBox2.classList.remove('selectedOptions');
        options2 = false;
    }
});
checkBox3.addEventListener('click', () => {
    if (!options3) {
        checkBox3.classList.add('selectedOptions');
        options3 = true;
    }
    else{
        checkBox3.classList.remove('selectedOptions');
        options3 = false;
    }
});
checkBox4.addEventListener('click', () => {
    if (!options4) {
        checkBox4.classList.add('selectedOptions');
        options4 = true;
    }
    else{
        checkBox4.classList.remove('selectedOptions');
        options4 = false;
    }
});
