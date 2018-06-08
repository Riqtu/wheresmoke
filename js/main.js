class Menu {
    constructor(className) {
        this.el = document.getElementsByClassName(className)[i];
        this.open = false;
        this.nav = document.getElementsByClassName("novigation")[i];
        this.l = document.getElementsByClassName("mleft")[i];
        this.c = document.getElementsByClassName("mcenter")[i];
        this.r = document.getElementsByClassName("mright")[i];
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

function openArticle(i) {
    var x = document.getElementsByClassName("article");
    i= x.length - i - 1;
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

function closeArticle() {
    var x = document.getElementsByClassName("article");
    i= x.length - i - 1;
    x[i].style.width = '700px';
    x[i].style.left = '20px';
    x[i].style.height = '270px';
    
    var y = document.getElementsByClassName("article__img");
    y[i].style.right = "0px";
    y[i].style.top = "0px";

    var z = document.getElementsByClassName("article__about");
    var a = document.getElementsByClassName("article__buy");
    var m = document.getElementsByClassName("article__map");

    z[i].style.opacity = "0"; 
    a[i].style.opacity = "0"; 
    m[i].style.opacity = "0"; 

    setTimeout(() => {
        a[i].style.transition = "1s";
        z[i].style.transition = "1s";
        m[i].style.transition = "1s";
        }, 1200);
}


function openArticle1() {
    var x = document.getElementsByClassName("article");
    x[1].style.width = '100vw';
    x[1].style.left = '0';
    x[1].style.height = 'calc(100vh - 145px)';
    
    var y = document.getElementsByClassName("article__img");
    y[1].style.right = "10px";
    y[1].style.top = "10px";

    var z = document.getElementsByClassName("article__about");
    var a = document.getElementsByClassName("article__buy");
    

    z[1].style.display = "block";
   
    a[1].style.display = "grid";
    setTimeout(() => {
       z[1].style.opacity = "1"; 
       a[1].style.opacity = "1";
    }, 100);

    var m = document.getElementsByClassName("article__map");
    setTimeout(() => {
        m[1].style.display = "block"; 
    }, 400);
    setTimeout(() => {
        m[1].style.opacity = "1";  
    }, 500);
}
function closeArticle1() {
    var x = document.getElementsByClassName("article");
    x[1].style.width = '700px';
    x[1].style.left = '20px';
    x[1].style.height = '270px';

    var y = document.getElementsByClassName("article__img");
    y[1].style.right = "0px";
    y[1].style.top = "0px";

    var z = document.getElementsByClassName("article__about");
    var a = document.getElementsByClassName("article__buy");
    var m = document.getElementsByClassName("article__map");

    z[1].style.opacity = "0"; 
    a[1].style.opacity = "0"; 
    m[1].style.opacity = "0"; 
}
function openArticle2() {
    var x = document.getElementsByClassName("article"); 
    x[2].style.width = '100vw';
    x[2].style.left = '0';
    x[2].style.height = 'calc(100vh - 145px)';
}