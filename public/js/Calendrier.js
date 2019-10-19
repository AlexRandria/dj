class Calendrier {
    constructor() {
        this.date = new Date();
        this.aujourdhui = new Date();
        this.nomMois = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
        this.nomJour = ['Di','Lu','Ma','Me','Je','Ve','Sa'];
        this.jourDansMois = new Date(this.date.getFullYear(),this.date.getMonth()+1,0).getDate();
        this.nomMoisEnCours = this.nomMois[this.date.getMonth()];
        this.table = document.createElement('table');
        this.npj = new Date(this.date.getFullYear(),this.date.getMonth(),1).getDay();
        this.semaine = 0;
        this.tr = null;
        this.row = 0;
        this.apresOjd = false;
        this.mois = document.createElement('strong');
        this.mois.textContent = this.nomMoisEnCours+' '+this.date.getFullYear();
        this.creerBoutton().creerTHead().creerTBody();
        calendrier.appendChild(this.table);
    }

    creerBoutton(){
        let precedent = document.createElement('div');
        precedent.textContent = '\u003c';
        precedent.className = 'bouttonG';
        precedent.addEventListener('click', () => this.boutonPrecedent());
        calendrier.appendChild(precedent);
        let suivant = document.createElement('div')
        suivant.className = 'bouttonD';
        suivant.addEventListener('click', () => this.boutonSuivant());
        suivant.textContent = '\u003e';
        calendrier.appendChild(suivant);
        return this;
    }
    creerTHead() {       
        let thead = this.table.createTHead();
        this.mois.className = 'mois';
        calendrier.appendChild(this.mois);
        let trHead = thead.insertRow();
        this.nomJour.forEach(jour => {
            trHead.insertCell().textContent = jour;
        });
		return this;
    }

    creerTBody() {
        this.table.createTBody();
        this.tr = this.table.tBodies[0].insertRow(0);
        let moisAvant = new Date(this.date.getFullYear(),this.date.getMonth(),0).getDate();
        let jourAvant = new Date(this.date.getFullYear(),this.date.getMonth(),1).getDay();
        for (let i = 0; i < this.npj; i++) {
            jourAvant--;
            this.tr.insertCell().textContent = moisAvant-jourAvant;
            this.tr.cells[i].className = 'vide';
            this.semaine++;
        }
        for (let i = 0; i < this.jourDansMois; i++) {
            if (this.semaine % 7 == 0)
                this.tr = this.table.tBodies[0].insertRow(this.row);
            this.tr.insertCell().textContent = i+1; 
            if (new Date(this.aujourdhui.getFullYear(),
                         this.aujourdhui.getMonth(),
                         this.aujourdhui.getDate()) - new Date(this.date.getFullYear(),
                                                               this.date.getMonth(),i+1)==0){
                this.apresOjd = true;
            }
            if (this.apresOjd){
                this.tr.cells[(this.npj+i)%7].classList.add('apresOjd');
                this.tr.cells[(this.npj+i)%7].id = `td${i+this.npj}`;
                this.tr.cells[(this.npj+i)%7].setAttribute('onclick',`recuperation('${this.date.getFullYear()}-${(this.date.getMonth()+1)<10?'0'+(this.date.getMonth()+1):this.date.getMonth()+1}-${i+1<10?'0'+(i+1):i+1}', ${i+this.npj})`);
            }
            this.semaine++;
            if (this.semaine % 7 == 0)
                this.row++;
        }
        if ((this.npj + this.jourDansMois) % 7 != 0) {
            let annee = this.date.getFullYear();
            let mois = this.date.getMonth()+2;
            if (mois > 12) {
                annee++;
                mois = 1;
            }
            if (!this.apresOjd){
                for (let i = (this.npj + this.jourDansMois) % 7, j = 1; i < 7; i++) {          
                    this.tr.insertCell().textContent = j;
                    this.tr.cells[i].className = 'vide';
                    this.semaine++;
                    j++;
                }
            } else {
                for (let i = (this.npj + this.jourDansMois) % 7, j = 1; i < 7; i++) {       
                    this.tr.insertCell().textContent = j;
                    this.tr.cells[i].className = 'apresOjd';
                    this.tr.cells[i].id = `td${j+this.npj+this.jourDansMois-1}`;
                    this.tr.cells[i].setAttribute('onclick',`recuperation('${annee}-${mois<10?'0'+mois:mois}-${j<10?'0'+j:j}', ${j+this.npj+this.jourDansMois-1})`);
                    this.semaine++;
                    j++;
                }
            }
        }
    }
    boutonSuivant() {
        this.date = new Date(this.date.getFullYear(),this.date.getMonth()+1);
        this.table.tBodies[0].remove();
        this.table.tHead.remove();
        this.row = 0;
        this.semaine = 0;
        if(new Date(this.date.getFullYear,this.date.getMonth()) > new Date(this.aujourdhui.getFullYear(),this.aujourdhui.getMonth()))
            this.apresOjd = true;
        this.nomMoisEnCours = this.nomMois[this.date.getMonth()];
        this.jourDansMois = new Date(this.date.getFullYear(),this.date.getMonth()+1,0).getDate();
        this.mois.textContent = this.nomMoisEnCours+' '+this.date.getFullYear();
        this.npj = new Date(this.date.getFullYear(),this.date.getMonth(),1).getDay();
        this.creerTHead().creerTBody();
    }

    boutonPrecedent() {
        this.date = new Date(this.date.getFullYear(),this.date.getMonth()-1);
        this.table.tBodies[0].remove();
        this.table.tHead.remove();
        if(new Date(this.date.getFullYear(),this.date.getMonth()) <= new Date(this.aujourdhui.getFullYear(),this.aujourdhui.getMonth()))
            this.apresOjd = false;
        this.row = 0;
        this.semaine = 0;
        this.nomMoisEnCours = this.nomMois[this.date.getMonth()];
        this.jourDansMois = new Date(this.date.getFullYear(),this.date.getMonth()+1,0).getDate();
        this.mois.textContent = this.nomMoisEnCours+' '+this.date.getFullYear();
        this.npj = new Date(this.date.getFullYear(),this.date.getMonth(),1).getDay();
        this.creerTHead().creerTBody();
    }
    
}