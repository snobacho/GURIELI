    // boolet slider 
    const contents = document.querySelectorAll('.content');
    const bullets = document.querySelectorAll('.bullet');
    const contentSlider = document.querySelector('.content-slider');
    let currentIndex = 0;
    let sliderInterval;

    const images = [
    '../assets/imgs/agriculture.jpg',
    '../assets/imgs/bg-2.jpg', 
    '../assets/imgs/bg-3.jpg',
    '../assets/imgs/bg-4.jpg'
    ];

    function changeBackgroundImage(index) {
    contentSlider.style.backgroundImage = `url(${images[index]})`;
    }

    function nextSlide() {
    currentIndex = (currentIndex + 1) % images.length;
    changeBackgroundImage(currentIndex);
    bullets.forEach((bullet, i) => bullet.classList.toggle('active', i === currentIndex));
    }

    function startSliderInterval() {
    sliderInterval = setInterval(nextSlide,14000); 
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




// swipper home product slider 
const swiper = new Swiper('.swiper-container', {
    slidesPerView: 4, 
    spaceBetween: 30, 
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
});