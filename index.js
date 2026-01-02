const body = document.body;
const darkBtn = document.getElementById('darkBtn');
const lightBtn = document.getElementById('lightBtn');
const navbar = document.querySelector('.navbar');

darkBtn.addEventListener('click', () => {
  body.classList.remove('light');
  body.classList.add('dark');
  navbar.classList.remove('navbar-light-mode');
  navbar.classList.add('navbar-dark-mode');
});

lightBtn.addEventListener('click', () => {
  body.classList.remove('dark');
  body.classList.add('light');
  navbar.classList.remove('navbar-dark-mode');
  navbar.classList.add('navbar-light-mode');
});
