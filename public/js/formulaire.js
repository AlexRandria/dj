"use strict";
let select = '';
let pourcentage = '';
function popup() {
    let input = document.querySelector('#formulaire_codePostal');
    let tabLi = document.querySelectorAll('.li_code_postal');
    tabLi.forEach(li => {
        if(input.value == li.textContent) {
            new Calendrier();
            document.querySelector('#popup-base').style = 'display:block';
        }
    });
}
function cancel() {
    document.querySelector('.popup_cancel_base').style = 'display:block';
}
function reload() {
    location.href = "https://www.oneclickdj.fr/";
}
function poursuivre() {
    document.querySelector('.popup_cancel_base').style = 'display:none';
}
function suivant() {
    document.querySelector('#formulaire').style = 'display:block';
    document.querySelector('.popup').style = 'display:none';
}
function progressBar() {
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}
function progressBarRetour() {
    let progress = document.querySelector('.progress-bar');
    progress.attributes[2].value = +progress.attributes[2].textContent - Math.round(100/10);
    progress.style = `width: ${progress.attributes[2].value}%`;
    document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété ${progress.attributes[2].value}% de votre demande`;
    let sr = document.querySelector('.sr-only');
    sr.textContent = progress.attributes[2].value+'%';
}
function suivant2() {
    let date = new Date();
    let ojd = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    if(new Date(select) > ojd){
        document.querySelector('.form_calendrier').style = 'display:none';
        document.querySelector('.form_nom_lieu').style = 'display:block';
        progressBar();
   }
}
function retour2(){
    document.querySelector('.popup').style = 'display:block';
    document.querySelector('#formulaire').style = 'display:none';
    progressBarRetour();
}

function suivant3() {
    let input = document.querySelector('#formulaire_formulaire_base_nom_du_lieu');
    if(input.value !== '') {
        document.querySelector('.form_nom_lieu').style = 'display:none';
        document.querySelector('.form_heure').style = 'display:block';
        progressBar();
    }
}
function retour3(){
    document.querySelector('.form_nom_lieu').style = 'display:none';
    document.querySelector('.form_calendrier').style = 'display:block';
    progressBarRetour();
}
function suivantHeure() {
    let heure = document.querySelector('#formulaire_formulaire_base_heure_de_debut_hour');
    let minute = document.querySelector('#formulaire_formulaire_base_heure_de_debut_minute');
    console.log(heure.value);
    if (heure.value !== '0' || minute.value !== '0') {
        document.querySelector('.form_heure').style = 'display:none';
        document.querySelector('.form_deroulement').style = 'display:block';
        progressBar();
    }
}
function retourHeure(){
    document.querySelector('.form_nom_lieu').style = 'display:block';
    document.querySelector('.form_heure').style = 'display:none';
    progressBarRetour();
}
function suivant4() {
    select = document.querySelector('#formulaire_deroulement');
    if(select.value !== 'Sélectionner') {
        document.querySelector('.form_deroulement').style = 'display:none';
        document.querySelector('.form_nb_personne').style = 'display:block';
        progressBar();
    }
}
function retour4(){
    document.querySelector('.form_heure').style = 'display:block';
    document.querySelector('.form_deroulement').style = 'display:none';
    progressBarRetour();
}
function suivant5() {
    document.querySelector('.form_nb_personne').style = 'display:none';
    document.querySelector('.form_ambiance').style = 'display:block';
    progressBar()
}
function retour5(){
    document.querySelector('.form_nb_personne').style = 'display:none';
    document.querySelector('.form_deroulement').style = 'display:block';
    progressBarRetour();
}
function suivant6() {
    let select = document.querySelector('#formulaire_ambiance');
    if(select.value !== 'Sélectionner') {
        document.querySelector('.form_ambiance').style = 'display:none';
        document.querySelector('.form_budget').style = 'display:block';
        progressBar();
    }
}
function retour6(){
    document.querySelector('.form_ambiance').style = 'display:none';
    document.querySelector('.form_nb_personne').style = 'display:block';
    progressBarRetour();
}
function suivant7() {
    let select = document.querySelector('#formulaire_budget');
    if(select.value != 'Sélectionner') {
        document.querySelector('.form_budget').style = 'display:none';
        document.querySelector('.form_nom').style = 'display:block';
        progressBar();
    }
}
function retour7(){
    document.querySelector('.form_ambiance').style = 'display:block';
    document.querySelector('.form_budget').style = 'display:none';
    progressBarRetour();
}
function suivant8() {
    let prenom = document.querySelector('#formulaire_formulaire_base_prenom');
    let nom = document.querySelector('#formulaire_formulaire_base_nom');
    if(prenom.value !== '') {
        document.querySelector('.form_nom').style = 'display:none';
        document.querySelector('.form_email').style = 'display:block';
        let progress = document.querySelector('.progress-bar');
        progress.attributes[2].value = +progress.attributes[2].textContent + Math.round(100/10);
        progress.style = `width: ${progress.attributes[2].value}%`;
        document.querySelector('.text_cancel').textContent = `N'arrêtez pas maintenant. Vous avez complété 100% de votre demande`;
        let sr = document.querySelector('.sr-only');
        sr.textContent = '100%';
    }
}
function retour8(){
    document.querySelector('.form_budget').style = 'display:block';
    document.querySelector('.form_nom').style = 'display:none';
    progressBarRetour();
}
function suivantEmail() {
    let email = document.querySelector('#formulaire_formulaire_base_email');
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
    progressBarRetour();
}
let input_form = document.querySelector('#formulaire_nb_personne');
input_form.addEventListener('input', () => {
    let personne = document.querySelector('.personne');
    personne.textContent = `${input_form.value} Personnes`;
})
function recuperation(date, num) {
    let tda = document.querySelector('.selected');
    if (tda)
        tda.classList.remove('selected');
    let td = document.querySelector(`#td${num}`);
    td.classList.add('selected');
    select = date;
    let div = document.querySelector('#formulaire_formulaire_base_date');
    div.value = date;
}
let body = document.querySelector('#body');
body.addEventListener('click', () => {
    let ul = document.querySelector('.ul_code_postal');
    ul.style = "display:none";
    let input = document.querySelector('#formulaire_codePostal');
    input.style = "border-radius:7px"
})
let input = document.querySelector('#formulaire_codePostal');
input.addEventListener('mouseover', () => {
    let ul = document.querySelector('.ul_code_postal');
    ul.style = "display:block; height:200px";
    input.style = "border-radius:none;"
});
String.prototype.ucFirst=function(){
    return this.substr(0,1).toUpperCase()+this.substr(1);
}
input.addEventListener('input', evt => {
    let code = evt.srcElement.value;
    if (code != ''){
        input.style = 'border-radius:none;';
        fetch(`/ajax/${code}`)
            .then(response =>{
                    return !response.ok ? Promise.reject(new Error('response invalide')) : response.json();
            })
            .then(code_po =>{
                let ul = document.querySelector('.ul_code_postal');
                ul.style = "display:block; height:200px"
                let tabLi = document.querySelectorAll('.li_code_postal');
                if(tabLi){
                    tabLi.forEach(li => {
                        ul.removeChild(li);
                    });
                }
                code_po.tabCode.forEach(code => {
                    let li = document.createElement('li');
                    li.textContent = code.code_postal +' '+ (code.nom_commune.toLowerCase().ucFirst());
                    li.addEventListener('click', () => {
                        input.value = code.code_postal +' '+ code.nom_commune.toLowerCase().ucFirst();
                    })
                    li.className = 'li_code_postal';
                    ul.appendChild(li);
                });
            })
            .catch(error => console.error(error.message))
    } else {
        let tabLi = document.querySelectorAll('.li_code_postal');
        ul = document.querySelector('.ul_code_postal');
        tabLi.forEach(li => {
            ul.removeChild(li);
        });
    }
});
