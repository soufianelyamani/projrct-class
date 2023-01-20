//hasAttribute('hena kate7att dakchi li bari te9alab 3elih') : hadiii kategool liik wach kayan attribut be 'true ou false'.

//hasAttributes(): hadiiik katgol liik wach kayane l'attribut belamaa te7att liih dakchii lii barii te9alab 3elih.

//attributes[] : hadii kate afficher liik les attribut, ou yamekaan liik tawesal lechii attribut be l'indixes.

//setAttribute( 'choisir l'attributes' , 'modifier l'attributes qui choisir') : permet de modifier l'attribut.

//removeAttribute( 'choisir l'attributes' ): permet de supprimer l'attributes.

//previousElementSibling : hadii kate afficher lik element li9ebal.

//nextElementSibling : hadii kate afficher lik element li mora dak element séléctioner. 

//previousSibling : hadii kate afficher lik ga3e dakchii li 9EBAL element selectioner(text,commentaire,element...).

//nextSibling : hadii kate afficher lik ga3e dakchii li MORA element selectioner(text,commentaire,element...).

//parentElement : hadii katejiib liik le parent li hazee daak l'element selectioner. 

//insertRow(0:ila dareti zero ki ajouti lik fe lwalal, ou ila dareti -1:ki ajouti lik fe lakhare):pour ajouter un row au tableau.
//insertCell(): pour ajouter un cellule ou row.

//la méthode deleteRow() : pour supprimer une ligne.
//la méthode deleteCell() : pour supprimer une cellule.

//Pour faire css dans JS:
    //Premier méthode : element.style.property = 'value'.
    //Deuxièm méthode : element.style.cssText = 'Henaa kata ketab css 3adi be7al kima katekatbo fe HTML'.
    //Troisiéme méthode : element.style.setProperty('property' , 'value').

//element.style.removeProperty('hena kanediro propety li bari tamesa7e') : Pour delete un property .

//Commment ajouter des elements dans l'HTML :
    //Premier méthode : انشاء العنصر
        //=> let element1 = document.createElement('choisir un element');
    //Deuxièm méthode : اضافة المحتوى
        //=> let element2 = document.createTextNode('ajouter le Contenu')
             //element1.appendChild(element2);
    //Exemple:
    /*
    let container = document.createElement('div');
    let ul = document.createElement('ul');
    let li1 = document.createElement('li');
    let li2 = document.createElement('li');

    let  ajouterli1 = document.createTextNode('EREN');
    li1.appendChild(ajouterli1);
    container.appendChild(li1);
    let  ajouterli2 = document.createTextNode('YEAGER');
    li2.appendChild(ajouterli2);
    container.appendChild(li2);
    document.body.appendChild(container);
    console.log(container)*/

//Méthode event : element.addEventListener(événement, fonction de rappel, useCapture);
                //exemple : 
                /*let ID = document.getElementById('ID');

                ID.addEventListener('click' , function(){
                    document.write("hello");
                })*/

//Toggle('henaa kadir dakchii li bari t'ajouter'):hadi manii katekeliki 3ela bouton gauche kite ajouta dakchi
        //li bari t'ajouter, ou mani katekeliki bouton droite kite supprima.


//Methode selectedIndex : ki3etiik l'index de option selectioner, syntaxe selectObject.selectedIndex = number.

//https://www.instagram.com/zouhair_el_oualidi/ == href.
//https == protocol.
//www.instagram.com == host name.
//zouhair_el_oualidi/ == patch name.

//clearTimeout(hena kadiir le variable li daretii fiih setTimeout()):hadiii kate7abass setTimeou.
//clearInterval(hena kadiir le variable li daretii fiih setInterval()):hadiii kate7abass setInterval.