/*
  Regular Expression

  Syntax:
  /pattern/modifier(s);
  new RegExp("pattern", "modifier(s)")

  Modifiers => Flags
  i => case-insensitive
  g => global
  m => Multilines

  Search Methods
  - match(Pattern)

  Match
  -- Matches A String Against a Regular Expression Pattern
  -- Returns An Array With The Matches
  -- Returns null If No Match Is Found.

  - Part 1
  (X|Y) => X Or Y
  [0-9] => 0 To 9
  [^0-9] => Any Character Not 0 To 9
  Practice

  - Part 2
  [a-z]
  [^a-z]
  [A-Z]
  [^A-Z]
  [abc]
  [^abc]

->Character Classes
  . => matches any character, except newline or other line terminators "hadi ta3e les caractére".
  \w => matches word characters. [a-z, A-Z, 0-9 And Underscore]
  \W => matches Non word characters
  \d => correspond aux chiffres de 0 à 9.
  \D => correspond aux caractères non numériques.
  \s => matches whitespace character"hadi katgool liih diir escpace".
  \S => matches non whitespace character.

->Character Classes
  \b => matches at the beginning or end of a word.
  \B => matches NOT at the beginning/end of a word.

  Test Method
  pattern.test(input) : hadi kateraja3e lik true ou false 

  Exemple:

let names = "Sayed 1Spam 2Spam 3Spam Spam4 Spam5 Osama Ahmed Aspamo";
let re = /(\bspam|spam\b)/ig;
console.log(names.match(re));
console.log(re.test(names));
console.log(re.test(names));

console.log(/(\bspam|spam\b)/ig.test("Osama"));
console.log(/(\bspam|spam\b)/ig.test("1Spam"));
console.log(/(\bspam|spam\b)/ig.test("Spam1"));

/*

  Quantifiers
  n+    => One Or More
  n*    => zero or more
  n?    => zero or one


let mails = "o@nn.sa osama@gmail.com elzero@gmail.net osama@mail.ru"; // All Emails
// let mailsRe = /\w+@\w+.(com|net)/ig;
let mailsRe = /\w+@\w+.\w+/ig;
console.log(mails.match(mailsRe));

let nums = "0110 10 150 05120 0560 350 00"; // 0 Numbers Or No 0
let numsRe = /0\d*0/ig;
console.log(nums.match(numsRe));

let urls = "https://google.com http://www.website.net web.com"; // http + https
let urlsRe = /(https?:\/\/)?(www.)?\w+.\w+/ig;
console.log(urls.match(urlsRe));
*/

/*
  Regular Expression

  Quantifiers
  n{x}   => Number of : "hadi x nbr, ya3eni n{4,} yekono rire 4 nbr "
  n{x,y} => Range
  n{x,}  => At Least x :"hadi x oulaa ketare mano, ya3eni n{4,} yekono 4 nbr oula ketaree"

let serials = "S100S S3000S S50000S S950000S";

console.log(serials.match(/s\d{3}\s/ig)); // S[Three Number]S
console.log(serials.match(/s\d{4,5}s/ig)); // S[Four Or Five Number]S
console.log(serials.match(/s\d{4,}s/ig)); // S[At Least Four]S
*/
/*
  Regular Expression

  Quantifiers
  $  => End With Something
  ^  => Start With Something
  ?= => hadi kat3enii yesali bedakchi li mora égale exemple : (?=R) 
  ?! => hadi le3akesse ta3e "?=".

let myString = " Love Programming We";
let names = "1OsamaZ 2AhmedZ 3Mohammed 4MoustafaZ 5GamalZ";

console.log(/ing$/ig.test(myString));
console.log(/^we/ig.test(myString));
console.log(/lz$/ig.test(names));
console.log(/^\d/ig.test(names));

console.log(names.match(/\d\w{5}(?=Z)/ig));
console.log(names.match(/\d\w{8}(?!Z)/ig));
*/
/*

  - replace
  - replaceAll


let txt = "We Love Programming And @ Because @ Is Amazing";
console.log(txt.replace("@", "JavaScript"));
console.log(txt.replaceAll("@", "JavaScript"));
let re = /@/ig;
console.log(txt.replaceAll(re, "JavaScript"));
console.log(txt.replaceAll(/@/ig, "JavaScript"));
*/

/*
  - Input Form Validation Practice
*/

document.getElementById("register").onsubmit = function () {
  let phoneInput = document.getElementById("phone").value;
  let phoneRe = /\(\d{4}\)\s\d{3}-\d{4}/; // (1234) 567-8910
  let validationResult = phoneRe.test(phoneInput);
  if (validationResult === false) {
    return false;
  }
  return true;
}

let phone = document.getElementById("phone").value
console.log(/^(6|7|5)\d{8}$/.test(phone.value))