const images = [
    'image/laravel_0.png',
    'image/laravel_1.png',
    'image/laravel_2.png',
    'image/laravel_11.png',
];

const imgContainer = document.querySelector('.main-img');
const allImages = imgContainer.querySelectorAll('img');
let currentIndex = 0;

function changerImage() {
    
    allImages.forEach(img => {

        img.classList.remove('active');

    });

    setTimeout(() => {
        currentIndex = (currentIndex + 1) % images.length;
        imgContainer.querySelector('img').src = images[currentIndex];
        allImages[currentIndex].classList.add('active');
    }, 1000); 

    console.log(currentIndex);

}

changerImage(); 

setInterval(changerImage, 3000);

document.addEventListener('DOMContentLoaded', () => {
    
    setTimeout(() => {

        document.getElementById('animated-text').classList.add('active');

    }, 500);

});

window.addEventListener('scroll', () => {
    const aboutSection = document.querySelector('.about-section');
    const aboutPosition = aboutSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.5;

    if (aboutPosition < screenPosition) {
        aboutSection.classList.add('about-visible');
    }
});

window.addEventListener('scroll', () => {
    const services = document.querySelectorAll('.service');
    services.forEach(service => {
        const servicePosition = service.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;

        if (servicePosition < screenPosition) {
            service.classList.add('service-visible');
        }
    });
});

window.addEventListener('scroll', () => {
    const contactSection = document.querySelector('.contact-section');
    const contactPosition = contactSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.5;

    if (contactPosition < screenPosition) {
        contactSection.classList.add('contact-visible');
    }
});
