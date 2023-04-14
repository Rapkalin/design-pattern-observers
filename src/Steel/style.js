
container = document.getElementById('container');
refresh_button =  document.getElementById('refreshButton');
notifications = document.querySelectorAll('.notification');
error = document.getElementById('error');

if (notifications.length > 0) {
    notifications.forEach(notification => notification.style.setProperty('visibility','visible'));
    container.style.setProperty('display','none');
    refresh_button.style.setProperty('display','');
} else {
    console.log(error);
    error.style.setProperty('visibility','visible');
}