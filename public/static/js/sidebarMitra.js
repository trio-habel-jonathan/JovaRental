document.addEventListener('DOMContentLoaded', function () {
    // Setup for all menus with submenus
    const menuItems = [
        { menu: 'pesanan', submenu: 'pesanan-submenu', chevron: 'pesanan-chevron' },
        { menu: 'kendaraan', submenu: 'kendaraan-submenu', chevron: 'kendaraan-chevron' },
        { menu: 'keuangan', submenu: 'keuangan-submenu', chevron: 'keuangan-chevron' },
        { menu: 'supir', submenu: 'supir-submenu', chevron: 'supir-chevron' },
        { menu: 'pengaturan', submenu: 'pengaturan-submenu', chevron: 'pengaturan-chevron' }
    ];

    // Initialize each menu
    menuItems.forEach(item => {
        const menuElement = document.getElementById(`${item.menu}-menu`);
        const submenuElement = document.getElementById(item.submenu);
        const chevronElement = document.getElementById(item.chevron);

        // Add click event to toggle submenu
        menuElement.addEventListener('click', function () {
            // Toggle expanded state
            const isExpanded = submenuElement.classList.contains('max-h-40');

            // Update classes
            if (isExpanded) {
                submenuElement.classList.remove('max-h-40');
                submenuElement.classList.add('max-h-0');
                chevronElement.classList.remove('rotate-180');
            } else {
                submenuElement.classList.remove('max-h-0');
                submenuElement.classList.add('max-h-40');
                chevronElement.classList.add('rotate-180');
            }

            menuElement.classList.toggle('rounded-b-none');
        });
    });

    // Add click events for all nav items to set active state
    const navItems = document.querySelectorAll('.items-center.px-4.py-3.rounded-lg');
    navItems.forEach(item => {
        if (!item.classList.contains('text-red-500')) {
            item.addEventListener('click', function () {
                // Remove active class from all nav items
                navItems.forEach(navItem => {
                    if (navItem !== item && !navItem.classList.contains('text-red-500')) {
                        navItem.classList.remove('bg-indigo-50', 'text-indigo-600');
                    }
                });

                // Add active class to clicked nav item
                if (!item.parentElement.classList.contains('group')) {
                    item.classList.add('bg-indigo-50', 'text-indigo-600');
                }
            });
        }
    });

    // Add click events for submenu items
    const submenuItems = document.querySelectorAll('.block.py-2.text-sm');
    submenuItems.forEach(item => {
        item.addEventListener('click', function (e) {
            e.stopPropagation(); // Prevent the click from bubbling up to the parent

            // Remove active class from all submenu items
            submenuItems.forEach(submenuItem => {
                submenuItem.classList.remove('text-indigo-600', 'font-medium');
            });

            const navItems = document.querySelectorAll('.items-center.px-4.py-3.rounded-lg');
            navItems.forEach(navItem => {
                if (!navItem.classList.contains('text-red-500')) {
                    navItem.classList.remove('bg-indigo-50', 'text-indigo-600');
                }
            });

            item.classList.add('text-indigo-600', 'font-medium');

            const parentMenuId = item.closest('.group').querySelector('[id$="-menu"]').id;
            document.getElementById(parentMenuId).classList.add('bg-indigo-50', 'text-indigo-600');

            // Add active class to clicked submenu item
            item.classList.add('text-indigo-600', 'font-medium');
        });
    });
});