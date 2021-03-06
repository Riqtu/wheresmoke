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


function openArticle(i) {
    var x = document.getElementsByClassName("article");
    // i= x.length - i - 1;
    var y = document.getElementsByClassName("article__img");
    var z = document.getElementsByClassName("article__about");
    var a = document.getElementsByClassName("article__buy");
    var m = document.getElementsByClassName("article__map");
    var ex = document.getElementsByClassName("article__exit");

    x[i].style.width = '100vw';
    x[i].style.left = '0';
    if (($(document).width())>500){
    x[i].style.height = '750px';
    }
    if (($(document).width())<=500){
        x[i].style.height = '370px';
    }
    y[i].style.right = "10px";
    y[i].style.top = "10px";

    
    z[i].style.display = "block";
    // a[i].style.display = "grid";

    ex[i].style.opacity = "1"; 
    setTimeout(() => {
       z[i].style.opacity = "1";
       if (($(document).width())>500){
    //    a[i].style.opacity = "1";
       }
    }, 100);
    if (($(document).width())>500){
    setTimeout(() => {
        m[i].style.display = "block"; 
    }, 400);
    setTimeout(() => {
        m[i].style.opacity = "1";  
    }, 500);
    }

    setTimeout(() => {
    a[i].style.transition = "0.4s";
    z[i].style.transition = "0.4s";
    m[i].style.transition = "0.4s";
    }, 1200);
}

function closeArticle(k) {
    var x = document.getElementsByClassName("article");
    // k= x.length - k - 1;
    if (($(document).width())>500){
    x[k].style.width = '700px';
    x[k].style.left = '20px';
    x[k].style.height = '270px';
    }
    if (($(document).width())<=500){
    x[k].style.width = '95%';
    x[k].style.left = '2.5%';
    x[k].style.height = '160px';
    }
    if (($(document).width())<=320){
        x[k].style.width = '95%';
        x[k].style.left = '2.5%';
        x[k].style.height = '120px';
        }
    var y = document.getElementsByClassName("article__img");
    y[k].style.right = "0px";
    y[k].style.top = "0px";

    var z = document.getElementsByClassName("article__about");
    var a = document.getElementsByClassName("article__buy");
    var m = document.getElementsByClassName("article__map");
    var ex = document.getElementsByClassName("article__exit");

    z[k].style.opacity = "0"; 
    a[k].style.opacity = "0"; 
    m[k].style.opacity = "0"; 
    ex[k].style.opacity = "0"; 

    setTimeout(() => {
        a[k].style.transition = "1s";
        z[k].style.transition = "1s";
        m[k].style.transition = "1s";
        }, 1200);

    setTimeout(() => {
        a[k].style.display = "none";
        z[k].style.display = "none";
        m[k].style.display = "none";
    }, 1200);
}

function start(){
    var old = document.getElementsByClassName("howold");
    old[0].style.opacity = "0";
    setTimeout(() => {
        old[0].style.display = "none";
    }, 1000);
}
function noold(){
    var nold = document.getElementsByClassName("howold__noold");
    var st = document.getElementsByClassName("howold__st");
    st[0].style.opacity = "0";
    setTimeout(() => {
        st[0].style.display = "none";
        nold[0].style.display = "block";
    }, 500);
    nold[0].style.opacity = "1";
}
function recomendationOn(){
    var z = document.getElementsByClassName("recomendation-all");
    var header = document.getElementsByClassName("article-recom_header");
    z[0].style.display = "block";
    setTimeout(() => {
        z[0].style.opacity = "1"; 
    }, 1);
    // setTimeout(() => {
    //     header[0].style.zIndex = "300"; 
    // }, 600);
}
function closeRecom(){
    var z = document.getElementsByClassName("recomendation-all");
    z[0].style.opacity = "0"; 
    setTimeout(() => {
        z[0].style.display = "none";
    }, 300);
}
function openAbout(){
    var z = document.getElementsByClassName("about");
    z[0].style.display = "block";
    setTimeout(() => {
        z[0].style.opacity = "1"; 
    }, 1);
}

function goToHome(){
    var z = document.getElementsByClassName("recomendation-all");
    var ab = document.getElementsByClassName("about");
    z[0].style.opacity = "0"; 
    ab[0].style.opacity = "0";
    setTimeout(() => {
        z[0].style.display = "none";
        ab[0].style.display = "none";
    }, 1);
}