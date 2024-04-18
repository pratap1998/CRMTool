const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signin');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})

const quotes = [
  {
    quote: "\"The only way to do great work is to love what you do\"",
    source: "-Steve Jobs"
  },
  {
    quote: "\"Believe you can and you're halfway there\"",
    source: "-Theodore Roosevelt"
  },
  {
    quote: "\"Don't watch the clock; do what it does. Keep going\"",
    source: "-Sam Levenson"
  },
  {
    quote: "\"The harder I work, the luckier I get\"",
    source: "-Gary Player"
  }
];

const quote = document.getElementById("quote");
const source = document.getElementById("source");

function changeQuote() {
  const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
  quote.textContent = randomQuote.quote;
  source.textContent = randomQuote.source;
}

changeQuote();
setInterval(changeQuote, 8000); // Change the quote every 8 seconds