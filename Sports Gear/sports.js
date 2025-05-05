window.addEventListener('load', () => {
    const preloadScreen = document.getElementById('preload-screen');
    const header = document.querySelector('.header');

    setTimeout(() => {
        preloadScreen.classList.add('fade-out');

        setTimeout(() => {
            header.style.opacity = '1';
            header.style.visibility = 'visible';
        }, 0.1); 
    }, 2000); 
});