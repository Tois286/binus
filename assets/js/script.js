 document.addEventListener('DOMContentLoaded', function() {
        // Optional: Handling collapse navbar on smaller screens
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');

        navbarToggler.addEventListener('click', function() {
            navbarCollapse.classList.toggle('show');
        });
    });