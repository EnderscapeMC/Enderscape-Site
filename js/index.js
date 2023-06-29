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

  var nav = document.getElementById('nav');
  var navBackground = document.getElementById('nav-background');
  var targetScrollPositions = {
    'leaderboards-bottom-row': window.innerHeight / 2,
    'quizzes': window.innerHeight / 10,
  };

  window.addEventListener('scroll', function() {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    nav.style.top = scrollTop + 'px';

    for (var targetId in targetScrollPositions) {
      var target = document.getElementById(targetId);
      var scrollPosition = target.offsetTop - targetScrollPositions[targetId];

      if (scrollTop >= scrollPosition) {
        nav.classList.remove('no-background');
        navBackground.classList.remove('hidden');
        navBackground.classList.add('show-background');
      } else {
        nav.classList.add('no-background');
        navBackground.classList.remove('show-background');
        navBackground.classList.add('hidden');
      }
    }
  });

  function smoothScroll(event, targetId) {
    event.preventDefault();

    const target = document.getElementById(targetId);
    const scrollPosition = target.offsetTop - targetScrollPositions[targetId];

    window.scrollTo({
      top: scrollPosition,
      behavior: 'smooth'
    });
  }
});