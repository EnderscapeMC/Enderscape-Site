document.addEventListener('DOMContentLoaded', function() {
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
      notification.style.display = 'block';
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

updateLeaderboard();

setInterval(updateLeaderboard, 3600000); 
});

