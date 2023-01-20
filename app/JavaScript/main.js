// let arr = [];

// setTimeout(() => {
//   arr.push('zouhair');
// }, 1000);

// document.write('arr' + arr);
// setTimeout(() => {
//   document.write('<br />arr' + arr);
// }, 1000);

// function salutation(nom, presentation) {
//   presentation(nom);
// }
// function hello(nom) {
//   console.log(`hello ${nom.toUpperCase()}`);
// }
// function salut(nom) {
//   console.log(`salut ${nom.toUpperCase()}`);
// }
// salutation('rami', hello);
// salutation('fahmi', salut);
function getData() {
  var ext = new XMLHttpRequest();
  ext.onreadystatechange(function () {
    var obj = JSON.parse(ext.responseText);
    console.log(obj[0].name);
  };
  ext.open('GET', 'json.json');
  ext.send();
  );
}
