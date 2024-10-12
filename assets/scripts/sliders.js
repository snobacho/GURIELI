// Custom slider function
function createCustomSlider(sliderContainer, imagePaths, intervalTime) {
    const bullets = sliderContainer.querySelectorAll('.bullet');
    const contentSlider = sliderContainer.querySelector('.content-slider');
    let currentIndex = 0;
    let sliderInterval;

    function changeBackgroundImage(index) {
        contentSlider.style.backgroundImage = `url(${imagePaths[index]})`;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % imagePaths.length;
        changeBackgroundImage(currentIndex);
        bullets.forEach((bullet, i) => bullet.classList.toggle('active', i === currentIndex));
    }

    function startSliderInterval() {
        sliderInterval = setInterval(nextSlide, intervalTime); 
    }

    function resetSliderInterval() {
        clearInterval(sliderInterval);
        startSliderInterval();
    }

    bullets.forEach((bullet, index) => {
        bullet.addEventListener('click', () => {
            currentIndex = index;
            changeBackgroundImage(index);
            bullets.forEach((bullet, i) => bullet.classList.toggle('active', i === index));
            resetSliderInterval();
        });
    });

    startSliderInterval();
}

// home slider
const slider1Images = [
    'assets/imgs/agriculture.jpg',
    'assets/imgs/bg-2.jpg',
    'assets/imgs/bg-3.jpg',
    'assets/imgs/bg-4.jpg'
];
const slider1Container = document.querySelector('#slider1');
if (slider1Container) {
    createCustomSlider(slider1Container, slider1Images, 14000);
}



const slider2Images = [
    'assets/imgs/agriculture.jpg',
    'assets/imgs/bg-5.jpg',
    'assets/imgs/bg-6.jpg',
    'assets/imgs/bg-7.jpg'
];
const slider2Container = document.querySelector('#slider2');
if (slider2Container) {
    createCustomSlider(slider2Container, slider2Images, 12000);
}

// Initialize Swiper slider
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 4, 
        loop: true, 
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000, 
            disableOnInteraction: false, 
        },
        breakpoints: {
            1025: { 
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1024: { 
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: { 
                slidesPerView: 2,
                spaceBetween: 10,
            }
        }
    });
});
