const data = document.getElementById("data");
const teraz = new Date();
if(data){
    const today = teraz.getFullYear() + "-" + String(teraz.getMonth() + 1).padStart(2, "0") + "-" + String(teraz.getDate()).padStart(2, "0");
    data.min = today;
}

const label = document.querySelector(".nav-toggle-label");
const navbar = document.querySelector(".navbar");

label.addEventListener('click', ()=>{
     const otwarte = navbar.classList.toggle("menu-open");
     label.setAttribute("aria-expanded", true);
});

const linki = document.querySelectorAll(".nav-links a");
linki.forEach(link => {
    link.addEventListener('click', ()=>{
    navbar.classList.remove("menu-open");
    label.setAttribute("aria-expanded", false);
    });
});