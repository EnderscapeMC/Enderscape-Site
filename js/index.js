document.addEventListener('DOMContentLoaded', function() {
  var header = document.getElementById('header');
  var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
  header.style.height = windowHeight + 'px';

  var ip = document.getElementById('ip');
  var notification = document.getElementById('notification');

  ip.addEventListener('click', function(event) {
    event.preventDefault();
    var textToCopy = 'enderscape.net'; 
    navigator.clipboard.writeText(textToCopy).then(function() {
      showNotification();
    });
  });

  function showNotification() {
    var ip = document.getElementById('ip');
    var ipPosition = ip.getBoundingClientRect();
    var notification = document.getElementById('notification');
    notification.style.display = 'block';
    notification.style.top = ipPosition.bottom + 'px';
    notification.style.left = ipPosition.left + 'px';
    setTimeout(function() {
      notification.style.display = 'none';
    }, 2000);
  }
});

var nav = document.getElementById("nav");

window.addEventListener('scroll', function() {
  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  nav.style.top = scrollPosition + 'px';
});

function smoothScroll(event, targetId) {
  event.preventDefault();

  const target = document.getElementById(targetId);
  const windowHeight = window.innerHeight;
  let scrollPosition;

  if (targetId === 'leaderboards-bottom-row') {
    scrollPosition = target.offsetTop - (windowHeight / 2);
  } else if (targetId === 'quizzes') {
    scrollPosition = target.offsetTop - (windowHeight / 10);
  } else {
    scrollPosition = target.offsetTop - (windowHeight / 3);
  }

  window.scrollTo({
    top: scrollPosition,
    behavior: 'smooth'
  });
}

window.addEventListener('scroll', function() {
  var quizzesSection = document.getElementById('quizzes');
  var nav = document.getElementById('nav');
  var navBackground = document.getElementById('nav-background');

  var quizzesSectionTop = quizzesSection.offsetTop;
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop >= quizzesSectionTop) {
    nav.classList.remove('no-background');
    navBackground.classList.remove('hidden');
    navBackground.classList.add('show-background');
  } else {
    nav.classList.add('no-background');
    navBackground.classList.remove('show-background');
    navBackground.classList.add('hidden');
  }
});