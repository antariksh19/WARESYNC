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

function toggleMenu() {
    const menu = document.getElementById('menu');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.classList.add('visible');
    } else {
        menu.classList.remove('visible');
        menu.classList.add('hidden');
    }
}

function toggleDropdown() {
    const dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('show-dropdown');
}

window.onclick = function(event) {
    if (!event.target.matches('.profile-icon')) {
        const dropdowns = document.getElementsByClassName("dropdown");
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show-dropdown')) {
                openDropdown.classList.remove('show-dropdown');
            }
        }
    }
}

let orderIndex = 0;

function moveSlide(direction) {
    const slider = document.querySelector('.order-slider');
    const orderCards = document.querySelectorAll('.order-card');
    const totalOrders = orderCards.length;

    orderIndex += direction;

    if (orderIndex < 0) {
        orderIndex = totalOrders - 1;
    } else if (orderIndex >= totalOrders) {
        orderIndex = 0; 
    }

    const offset = -orderIndex * 100 + '%';
    slider.style.transform = `translateX(${offset})`;
}




