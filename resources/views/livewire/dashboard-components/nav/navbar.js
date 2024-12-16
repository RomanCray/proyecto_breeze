// import { mapRange } from 'gsap';
import { EIgsap as gsap, EIScrollTrigger as ScrollTrigger } from '../../../../js/app.js'

gsap.registerPlugin(ScrollTrigger);

let navi = document.querySelector(".navbar.navbar-expand-lg.bg-body-tertiary.shadow.fixed-top").getBoundingClientRect().height
let contenido = document.getElementById("my_content").style.paddingTop = navi + "px"

const elementos = document.getElementById("gominola_m");
const items = elementos.getElementsByTagName("li");

for (let i = 0; i < items.length; i++) {
    let item = items[i].id;
    let boton = document.getElementById(item);

    if (boton) {
        boton.addEventListener("mouseenter", () => {
            gsap.to(`#${item}`, { y: -7, ease: "power1.in", duration: 0.1 });
        });

        boton.addEventListener("mouseleave", () => {
            gsap.to(`#${item}`, { y: 0, ease: "power1.in", duration: 0.1 });
        });
    }
};
