let myAdmins = ['Ahmed', 'Osama', 'Sayad', 'Zouhair', 'Stop', 'Samera'];
let myEmployees = [
  'Amgad',
  'Samah',
  'Ameer',
  'Omar',
  'Othman',
  'Amany',
  'Samia',
  'Anwar',
];
for (let i = 0; i < myAdmins.length; i++) {
  if (i === myAdmins.indexOf('Stop')) {
    document.write(`<div>We Have ${i} Admins</div>`);

    document.write('<hr>');
    for (let i = 0; i < myAdmins.indexOf('Stop'); i++) {
      document.write(`<div>`);

      document.write(`<h1>The Admin For Team ${i + 1} Is ${myAdmins[i]}</h1>`);

      document.write('<h3>Team Members :-</h3>');

      document.write(`<hr>`);

      clée = 0;

      for (let j = 0; j < myEmployees.length; j++) {
        if (myAdmins[i][0] === myEmployees[j][0]) {
          clée += 1;

          document.write(`<p>- ${clée} ${myEmployees[j]}</p>`);
        }
      }
      document.write(`</div>`);
      document.write(`<hr>`);
    }
  }
}
