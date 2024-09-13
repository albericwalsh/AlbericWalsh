const sections = document.querySelectorAll('section');
const menuButtons = document.querySelectorAll('.menu-btn');

function handleScroll() {
    let index = 0;

    sections.forEach((sections, i) => {
        const sectionTop = sections.getBoundingClientRect().top;
        const sectionHeight = sections.offsetHeight;

        if (sectionTop < window.innerHeight && sectionTop + sectionHeight > 0) {
            index = i;
            sections.classList.add('visible');
        }
    });

    menuButtons.forEach((btn, i) => {
        if (i === index-1) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });
}

function Slide_Animate() {
    const element = document.getElementById('.slide-enter');

    element.forEach((element) => {
        const elementTop = element.getBoundingClientRect().top;
        const elementHeight = element.offsetHeight;

        if (elementTop < window.innerHeight && elementTop + elementHeight > 0) {
            element.classList.add('active');
        } else {
            element.classList.remove('active');
        }
    });
}

window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll); // Assure l'animation lors du chargement initial


window.addEventListener('scroll', Slide_Animate);
window.addEventListener('load', Slide_Animate);
