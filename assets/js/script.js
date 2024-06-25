window.addEventListener("DOMContentLoaded", function () {
  //Effet header au défilement
  function headerEffectOnScroll() {
    window.addEventListener("scroll", function () {
      var header = document.getElementById("homepage__header");
      var logo = document.getElementById("site__header__logo");
      if (header) {
        header.classList.toggle("sticky", window.scrollY > 0);
        logo.classList.toggle("sticky__logo", window.scrollY > 0);
      }
    });
  }
  headerEffectOnScroll();

  //Fonction qui permet d'ouvrir le menu burger
  function burgerMenuOnClick() {
    var menuBtn = document.getElementById("menu__btn");
    var burgerMenu = document.getElementById("burger__menu");
    var overlay = document.getElementById("overlay");
    var burgerMenuBtn = document.getElementById("top__header__burger__icon");

    menuBtn.addEventListener("click", function () {
      burgerMenu.classList.toggle("open");
      if (overlay.style.display === "none" || overlay.style.display === "") {
        overlay.style.display = "block";
      }
    });

    //Au clique sur le document
    document.addEventListener("click", function (event) {
      var clickInMenuBtn = menuBtn.contains(event.target);
      var clickInBurgerMenu = burgerMenu.contains(event.target);
      var clickInBurgerMenuBtn = burgerMenuBtn.contains(event.target);
      //Si le clique est dans sur le bouton "Burger Menu" ou n'est ni dans le bouton du menu et dans le menu
      if (clickInBurgerMenuBtn || (!clickInMenuBtn && !clickInBurgerMenu)) {
        burgerMenu.classList.remove("open");
        overlay.style.display = "none";
      }
    });
  }
  burgerMenuOnClick();

  //Fonction qui permet d'ouvrir les sous-menus
  function dropdownBurgerMenu() {
    var dropdownBtnTop = document.getElementById("title__arrow__top");
    var arrowTop = document.getElementById("arrow__top");
    var dropdownContentTop = document.getElementById("content__dropdown__top");

    var dropdownBtnBottom = document.getElementById("title__arrow__bottom");
    var arrowBottom = document.getElementById("arrow__bottom");
    var dropdownContentBottom = document.getElementById(
      "content__dropdown__bottom"
    );

    dropdownBtnTop.addEventListener("click", function () {
      toggleDropdown(arrowTop, dropdownContentTop);
      closeOtherDropdown(arrowBottom, dropdownContentBottom);
    });

    dropdownBtnBottom.addEventListener("click", function () {
      toggleDropdown(arrowBottom, dropdownContentBottom);
      closeOtherDropdown(arrowTop, dropdownContentTop);
    });

    function toggleDropdown(arrow, content) {
      arrow.classList.toggle("rotate__180");
      content.classList.toggle("content__dropdown__hidden");
    }

    function closeOtherDropdown(otherArrow, otherContent) {
      if (!otherContent.classList.contains("content__dropdown__hidden")) {
        otherArrow.classList.remove("rotate__180");
        otherContent.classList.add("content__dropdown__hidden");
      }
    }
  }
  dropdownBurgerMenu();

  //Liens d'ancrage
  function scrollToAnchorLink() {
    scrollTo = (element) => {
      window.scroll({
        behavior: "smooth",
        left: 0,
        top: element.offsetTop - 125,
      });
    };

    if (
      document.getElementById(
        "classement__teams__anchor",
        "calendrier-resultats__teams__anchor",
        "gardiens",
        "defenseurs",
        "milieux",
        "attaquants",
        "staff"
      )
    ) {
      document
        .getElementById("classement__teams__anchor")
        .addEventListener("click", () => {
          scrollTo(document.getElementById("classement__teams"));
        });

      document
        .getElementById("calendrier-resultats__teams__anchor")
        .addEventListener("click", () => {
          scrollTo(document.getElementById("calendrier-resultats__teams"));
        });

      document.getElementById("gardiens").addEventListener("click", () => {
        scrollTo(document.getElementById("gardiens__target"));
      });

      document.getElementById("defenseurs").addEventListener("click", () => {
        scrollTo(document.getElementById("defenseurs__target"));
      });

      document.getElementById("milieux").addEventListener("click", () => {
        scrollTo(document.getElementById("milieux__target"));
      });

      document.getElementById("attaquants").addEventListener("click", () => {
        scrollTo(document.getElementById("attaquants__target"));
      });

      document.getElementById("staff").addEventListener("click", () => {
        scrollTo(document.getElementById("staff__target"));
      });
    }
  }
  scrollToAnchorLink();

  //Fonction slider des partenaires
  function sponsorSlider() {
    //Stocker toutes les images du slider
    let img = document.getElementsByClassName("slider__img");
    console.log("Console :", img);
  }
  sponsorSlider();
});
