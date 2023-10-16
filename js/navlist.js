function showCategory(category) {
    var containers = document.querySelectorAll('.container');

    containers.forEach(function(container) {
        container.style.display = 'none';
    });

    var selectedContainer = document.querySelector('.container.' + category);
    if (selectedContainer) {
        selectedContainer.style.display = 'block';
    }

    var navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(function(navItem) {
        navItem.classList.remove('active');
    });

    var selectedNavItem = document.querySelector('.nav-item.' + category);
    if (selectedNavItem) {
        selectedNavItem.classList.add('active');
    }
}
