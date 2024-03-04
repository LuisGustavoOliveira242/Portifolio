document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navList = document.querySelector('nav ul');

    menuToggle.addEventListener('click', function () {
        navList.classList.toggle('show');
        menuToggle.classList.toggle('active');
    });

    // Fecha o menu se um item for clicado (opcional)
    document.querySelectorAll('nav a').forEach(item => {
        item.addEventListener('click', () => {
            navList.classList.remove('show');
            menuToggle.classList.remove('active');
        });
    });
});

