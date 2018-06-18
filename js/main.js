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

function howold(){
    var y = document.getElementsByClassName("howold");
    y.style.opacity = "0"; 
}

function openArticle(i) {
    var x = document.getElementsByClassName("article");
    // i= x.length - i - 1;
    var y = document.getElementsByClassName("article__img");
    var z = document.getElementsByClassName("article__about");
    var a = document.getElementsByClassName("article__buy");
    var m = document.getElementsByClassName("article__map");

    x[i].style.width = '100vw';
    x[i].style.left = '0';
    x[i].style.height = 'calc(100vh - 145px)';
    

    y[i].style.right = "10px";
    y[i].style.top = "10px";

    
    z[i].style.display = "block";
    a[i].style.display = "grid";
    setTimeout(() => {
       z[i].style.opacity = "1"; 
       a[i].style.opacity = "1";
    }, 100);

    setTimeout(() => {
        m[i].style.display = "block"; 
    }, 400);
    setTimeout(() => {
        m[i].style.opacity = "1";  
    }, 500);


    setTimeout(() => {
    a[i].style.transition = "0.4s";
    z[i].style.transition = "0.4s";
    m[i].style.transition = "0.4s";
    }, 1200);
}

function closeArticle(k) {
    var x = document.getElementsByClassName("article");
    // k= x.length - k - 1;
    x[k].style.width = '700px';
    x[k].style.left = '20px';
    x[k].style.height = '270px';
    
    var y = document.getElementsByClassName("article__img");
    y[k].style.right = "0px";
    y[k].style.top = "0px";

    var z = document.getElementsByClassName("article__about");
    var a = document.getElementsByClassName("article__buy");
    var m = document.getElementsByClassName("article__map");

    z[k].style.opacity = "0"; 
    a[k].style.opacity = "0"; 
    m[k].style.opacity = "0"; 

    setTimeout(() => {
        a[k].style.transition = "1s";
        z[k].style.transition = "1s";
        m[k].style.transition = "1s";
        }, 1200);
}
