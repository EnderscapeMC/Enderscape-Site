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

  function updateLeaderboard() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'lands_database.php', true);

    xhr.onload = function() {
      if (xhr.status >= 200 && xhr.status < 400) {
        var response = xhr.responseText;
        var leaderboardTable = document.getElementById('leaderboard-table');
        leaderboardTable.innerHTML = response;
      }
    };

    xhr.send();
  }
});

var nav = document.getElementById("nav");

window.addEventListener('scroll', function() {
  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  nav.style.top = scrollPosition + 'px';
});
