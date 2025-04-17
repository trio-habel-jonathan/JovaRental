function toggleMenu(sopirId) {
    const menu = document.getElementById(`optionsMenu_${sopirId}`);
    const allMenus = document.querySelectorAll('[id^="optionsMenu_"]');
    allMenus.forEach(item => {
        if (item.id !== `optionsMenu_${sopirId}`) {
            item.classList.add('hidden');
        }
    });
    
    menu.classList.toggle('hidden');

    document.addEventListener('click', function closeMenu(e) {
        const toggleButton = document.getElementById(`toggleButton_${sopirId}`);
        if (!menu.contains(e.target) && !toggleButton.contains(e.target)) {
            menu.classList.add('hidden');
            document.removeEventListener('click', closeMenu);
        }
    });
}
document.addEventListener('DOMContentLoaded', function() {
    const allMenus = document.querySelectorAll('[id^="optionsMenu_"]');
    allMenus.forEach(menu => {
        menu.classList.add('hidden');
    });
});