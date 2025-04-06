let navItems = document.querySelectorAll('.header__nav-menu li a');

navItems.forEach(item => {
    item.addEventListener('click', function() {
        navItems.forEach(i => {
            if (i.classList.contains('active')) {
                i.classList.remove('active');
            }
        });
        this.classList.add('active');
    });
})


// Tooltip initialization
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})