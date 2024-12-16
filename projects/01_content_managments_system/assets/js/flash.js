 // Automatically dismiss flash messages after 5 seconds
    setTimeout(() => {
    const flashMessages = document.querySelectorAll('.flash-container .alert');
    flashMessages.forEach((message) => {
    message.classList.add('fade-out');
    message.addEventListener('animationend', () => {
    message.remove(); // Remove the message from the DOM after fade-out
});
});
}, 5000); // 5000 ms = 5 seconds
