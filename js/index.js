document.addEventListener('DOMContentLoaded', function() {
    var ip = document.getElementById('ip');
    var notification = document.getElementById('copy-notification');

    ip.addEventListener('click', function(event) {
      event.preventDefault();
  
      var textToCopy = 'enderscape.net'; 
      navigator.clipboard.writeText(textToCopy).then(function() {
        console.log('IP copied to clipboard.');
        showNotification();
      }, function(err) {
        console.error('Failed to copy IP: ', err);
      });
    });

    function showNotification() {
        notification.style.display = 'block';
        setTimeout(function() {
            notification.style.display = 'none';
        }, 2000);
    }
});

