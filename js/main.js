class Menu {
    constructor(className) {
        this.el = document.getElementsByClassName(className)[0];
        this.open = false;
        this.nav = document.getElementsByClassName("novigation")[0];
        this.l = document.getElementsByClassName("mleft")[0];
        this.c = document.getElementsByClassName("mcenter")[0];
        this.r = document.getElementsByClassName("mright")[0];
        this.el.addEventListener("click", () => {
            this.setMenu()});
    }

    openMenu() {
        this.open = true;
        this.el.classList.add('menu__img--open');
        this.nav.classList.add('novigation--open');
        this.l.classList.add("mleft--open");
        this.c.classList.add("mcenter--open");
        this.r.classList.add("mright--open");
    }

    closeMenu() {
        this.open = false;
        this.nav.classList.remove('novigation--open');
        this.el.classList.remove('menu__img--open');
        this.l.classList.remove("mleft--open");
        this.c.classList.remove("mcenter--open");
        this.r.classList.remove("mright--open");
    }

    setMenu() {
        if(this.open) this.closeMenu();
        else this.openMenu();
    }
}

var menu = new Menu("menu__img");

function openArticle() {
    document.getElementsByClassName('article')[0].style.width = '100vw';
    document.getElementsByClassName('article')[0].style.left = '0';
    document.getElementsByClassName('article')[0].style.height = 'calc(100vh - 145px)';
}