window.addEventListener("DOMContentLoaded", function () {
    //Effet header au défilement
    function headerEffectOnScroll() {
        window.addEventListener('scroll', function () {
            var header = document.getElementById('homepage__header');
            var logo = document.getElementById('site__header__logo');
            if (header) {
                header.classList.toggle('sticky', window.scrollY > 0);
                logo.classList.toggle('sticky__logo', window.scrollY > 0);
            }
        });
    }
    headerEffectOnScroll();

    //Fonction qui permet d'ouvrir le menu burger
    function burgerMenuOnClick() {
        var menuBtn = document.getElementById('menu__btn');
        var burgerMenu = document.getElementById('burger__menu');
        var overlay = document.getElementById('overlay');
        var burgerMenuBtn = document.getElementById('top__header__burger__icon');

        menuBtn.addEventListener('click', function () {
            burgerMenu.classList.toggle('open');
            if (overlay.style.display === 'none' || overlay.style.display === '') {
                overlay.style.display = 'block';
            }
        });

        //Au clique sur le document
        document.addEventListener('click', function (event) {
            var clickInMenuBtn = menuBtn.contains(event.target);
            var clickInBurgerMenu = burgerMenu.contains(event.target);
            var clickInBurgerMenuBtn = burgerMenuBtn.contains(event.target);
            //Si le clique est dans sur le bouton "Burger Menu" ou n'est ni dans le bouton du menu et dans le menu
            if (clickInBurgerMenuBtn || !clickInMenuBtn && !clickInBurgerMenu) {
                burgerMenu.classList.remove('open');
                overlay.style.display = 'none';
            }
        });
    }
    burgerMenuOnClick();

    //Fonction qui permet d'ouvrir les sous-menus
    function dropdownBurgerMenu() {
        var dropdownBtnTop = document.getElementById('title__arrow__top');
        var arrowTop = document.getElementById('arrow__top');
        var dropdownContentTop = document.getElementById('content__dropdown__top');

        var dropdownBtnBottom = document.getElementById('title__arrow__bottom');
        var arrowBottom = document.getElementById('arrow__bottom');
        var dropdownContentBottom = document.getElementById('content__dropdown__bottom');

        dropdownBtnTop.addEventListener('click', function () {
            toggleDropdown(arrowTop, dropdownContentTop);
            closeOtherDropdown(arrowBottom, dropdownContentBottom);
        });

        dropdownBtnBottom.addEventListener('click', function () {
            toggleDropdown(arrowBottom, dropdownContentBottom);
            closeOtherDropdown(arrowTop, dropdownContentTop);
        });

        function toggleDropdown(arrow, content) {
            arrow.classList.toggle('rotate__180');
            content.classList.toggle('content__dropdown__hidden');
        }

        function closeOtherDropdown(otherArrow, otherContent) {
            if (!otherContent.classList.contains('content__dropdown__hidden')) {
                otherArrow.classList.remove('rotate__180');
                otherContent.classList.add('content__dropdown__hidden');
            }
        }

        // dropdownBtnTop.addEventListener('click', function () {

        //     // Fermer tous les sous-menus sauf celui actuellement ouvert
        //     closeAllDropdownsExcept('content__dropdown__top');

        //     arrowTop.classList.toggle('rotate__180');
        //     dropdownContentTop.classList.toggle('content__dropdown__hidden');

        // });

        // dropdownBtnBottom.addEventListener('click', function () {

        //     // Fermer tous les sous-menus sauf celui actuellement ouvert
        //     closeAllDropdownsExcept('content__dropdown__bottom');

        //     arrowBottom.classList.toggle('rotate__180');
        //     dropdownContentBottom.classList.toggle('content__dropdown__hidden');

        // });

        // function closeAllDropdownsExcept(currentDropdownClass) {
        //     var allDropdowns = document.querySelectorAll('.content__dropdown__top, .content__dropdown__bottom');

        //     allDropdowns.forEach(function (dropdown) {
        //         // Fermer tous les sous-menus sauf celui actuellement ouvert
        //         if (dropdown.classList.contains(currentDropdownClass)) {
        //             return;
        //         }
        //         dropdown.classList.add('content__dropdown__hidden');
        //     });

        //     var allArrows = document.querySelectorAll('.rotate__180');
        //     allArrows.forEach(function (arrow) {
        //         // Réinitialiser toutes les flèches sauf celle du sous-menu actuel
        //         if (!arrow.classList.contains('rotate__180')) {
        //             return;
        //         }
        //         if (arrow.classList.contains(currentDropdownClass === 'content__dropdown__top' ? 'rotate__180' : 'rotate__180')) {
        //             return;
        //         }
        //         arrow.classList.remove('rotate__180');
        //     });
        // }
    }
    dropdownBurgerMenu();

    //Liens d'ancrage
    function scrollToAnchorLink() {
        scrollTo = (element) => {
            window.scroll({
                behavior: 'smooth',
                left: 0,
                top: element.offsetTop - 125
            });
        }

        document.getElementById("classement__teams__anchor").addEventListener('click', () => {
            scrollTo(document.getElementById("classement__teams"));
        });

        document.getElementById("calendrier-resultats__teams__anchor").addEventListener('click', () => {
            scrollTo(document.getElementById("calendrier-resultats__teams"));
        });

        document.getElementById("gardiens").addEventListener('click', () => {
            scrollTo(document.getElementById("gardiens__target"));
        });

        document.getElementById("defenseurs").addEventListener('click', () => {
            scrollTo(document.getElementById("defenseurs__target"));
        });

        document.getElementById("milieux").addEventListener('click', () => {
            scrollTo(document.getElementById("milieux__target"));
        });

        document.getElementById("attaquants").addEventListener('click', () => {
            scrollTo(document.getElementById("attaquants__target"));
        });

        document.getElementById("staff").addEventListener('click', () => {
            scrollTo(document.getElementById("staff__target"));
        });
    }
    scrollToAnchorLink();
});