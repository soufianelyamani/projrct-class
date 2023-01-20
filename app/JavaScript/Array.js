//PUSH : hadii katezidee liik 3onesore fe array mais fe last.
/*let name = ['a','b','c','b','d'];
name.push('e','z');
console.log(name)*/

//UNSHIFT : be7all push walkin katezide le3onessore fe first.
//let names = [1,2,3,4,5];
//names.unshift(6);
//console.log(names);

//SHIFT : katamesa7 le3onessore man fist ta3e array, ou kate7etafad be daak le3onessor li mase7att.
//let tab = [1,2,3,4,5];
//tab.shift();
//console.log(tab);

//POP : le3akess ta3e shift.
//let tabs = [1,2,3,4,5,6];
//tabs.pop();
//console.log(tabs);

//slice : permet de couperman array;
//const fruits = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
//console.log(fruits.slice(1,3))

//splice : hadii kate7adade lik le3onessor li barii t'supp, ou imkan liik te7adade che7al man 3onesore bari t'supp,
//ou yamekan liha tezide le3onessore fe array "splice('start','count','add...')".
//let x = [1,2,3,4,5,6];
//x.splice(0,2,10);
//console.log(x);

//INDEXOF : search element in array, fe resultat kata3etiik indix ta3o,ou ila male9atch kata3etiik -1;
//let tab = ["zouhair","mohmed","adam","mossa"];
//console.log(tab.indexOf("zouhair"))

//LASTINDEXOF : hadii be7all IndexOf mais katabedaa man last ta3e array.
//let tab = ["zouhair","mohmed","zouhair","mossa"];
//console.log(tab.lastIndexOf("zouhair"));

//INCLUDES : La méthode includes() permet de déterminer si un tableau contient une valeur et renvoie true si c'est le cas, false sinon.
//let tab = ["zouhair","mohmed","zouhair","mossa"];
//console.log(tab.includes("zouhair",2));

//RAVERSE : kata3ekass liik lclassement ta3e array.
//let tab = ["zouhair","mohmed","zouhair","mossa"];
//console.log(tab.reverse());

//SORT : kate classi liik l'array en classement alphabitique, ou katakhedame 7etaa les nbrs
//let tab = ["zouhair","mohmed","ibrahime","mossa"];
//console.log(tab.sort());

//CONCAT = katejema3e liik les array, ou yamekan liik teziid 3onessar.
//let tab1 = [1,2,3,4,5];
//tab2 = [6,7,8,9,10];
//tab3 = [11,12,13,14,15];
//console.log(tab1.concat(tab1,tab2,tab3));

//JOIN : permet de transforme array en string, ou yamekan te7atee fe entre parentise li beriti "join("+"," ","/",":" ...)"
//let tab = ["zouhair","mohmed","zouhair","mossa"];
//console.log(tab.join(" "));

//Array.isArray('Array Name') => hadii function Bach ta3eraaf wach variab wach array oulaa laaa.

//Hadi kate7awal objet l'table
// function toArray(pr) {
//     return Array.prototype.slice.call(arguments);
//   }
//   var classification = toArray(
// 'Driss',
// 'Sadia',
// 'Zouhair',
// 'Bassam',
// 'Oumaima',
// 'Sanaa',
// 'Maryam',
// 'Bissi'
//   );
//   console.log(classification);
