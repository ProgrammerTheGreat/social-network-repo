document.addEventListener("DOMContentLoaded", function(){
    // JavaScript for chat menu toggle
    const chatMenu = document.getElementById('chatMenu');
    const chatToggleBtn = document.getElementById('chatToggleBtn');
    const chatCloseBtn = document.getElementById('chatCloseBtn');

    chatToggleBtn.addEventListener('click', function() {
        chatMenu.classList.toggle('active');
        chatToggleBtn.style.display = 'none'; // Hide the button when chat menu is toggled
    });

    chatCloseBtn.addEventListener('click', function() {
        chatMenu.classList.remove('active');
        chatToggleBtn.style.display = 'block'; // Show the button when chat menu is closed
    });
});
