
container = document.getElementById('container');
refresh_button =  document.getElementById('refreshButton');
notifications = document.querySelectorAll('.notification');

if (notifications.length > 0) {
    container.style.setProperty('display','none');
    refresh_button.style.setProperty('display','');
}