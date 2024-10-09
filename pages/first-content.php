<?php
    $root = '/GURIELI/'; 
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<head>
  <link rel="stylesheet" href="<?php echo $root?>assets/styles/global.css">
  <link rel="stylesheet" href="<?php echo $root?>assets/styles/first-slider.css">
</head>

<div class="slider-container">
  <div class="left-bar">
    <div class="bullets">
      <div class="bullet active"></div>
      <div class="bullet"></div>
      <div class="bullet"></div>
      <div class="bullet"></div>
    </div>
  </div>

  <div class="content-slider" style="background-image: url(<?= $root?>/assets/imgs/agriculture.jpg)">
    <div class="content active">
      <h4 class="small-desc">GEORGIAN TRADITION</h4>
      <h1 class="heading">TEA MAKING CULTURE INSPIRED <br> BY THE HISTORY</h1>
      <p class="description">From the begining it was back in 1809, two hundred years <br> ago, first tea plant was brought to Georgia</p>
      <button class="btn-light"><a href="#"> Read More </a></button>
    </div>

    <div class="content">
      <h4 class="small-desc">GEORGIAN TRADITION 2</h4>
      <h1 class="heading">TEA MAKING CULTURE INSPIRED <br> BY THE HISTORY</h1>
      <p class="description">From the begining it was back in 1809, two hundred years <br> ago, first tea plant was brought to Georgia</p>
      <button class="btn-light"><a href="#"> Read More </a></button>
    </div>

    <div class="content">
      <h4 class="small-desc">GEORGIAN TRADITION 3</h4>
      <h1 class="heading">TEA MAKING CULTURE INSPIRED <br> BY THE HISTORY</h1>
      <p class="description">From the begining it was back in 1809, two hundred years <br> ago, first tea plant was brought to Georgia</p>
      <button class="btn-light"><a href="#"> Read More </a></button>
    </div>

    <div class="content">
      <h4 class="small-desc">GEORGIAN TRADITION 4</h4>
      <h1 class="heading">TEA MAKING CULTURE INSPIRED <br> BY THE HISTORY</h1>
      <p class="description">From the begining it was back in 1809, two hundred years <br> ago, first tea plant was brought to Georgia</p>
      <button class="btn-light"><a href="#"> Read More </a></button>
    </div>

  <div class="right-bar">
    <div class="social-icons">
      <a href="" target="_blank" class="icon"><img src="assets/imgs/icons/facebook.png" alt=""></a>
      <a href="" target="_blank" class="icon"><img src="assets/imgs/icons/instagram.png" alt=""></a>
      <a href="" target="_blank" class="icon"><img src="assets/imgs/icons/linkedin.png" alt=""></a>
      <a href="" target="_blank" class="icon"><img src="assets/imgs/icons/youtube.png" alt=""></a>
    </div>
  </div>
</div>



<script>
    const contents = document.querySelectorAll('.content');
    const bullets = document.querySelectorAll('.bullet');
    let currentIndex = 0;
    let sliderInterval;

    function showContent(index) {
      contents.forEach((content, i) => {
        content.classList.remove('active');
        bullets[i].classList.remove('active');
      });

      setTimeout(() => {
        contents[index].classList.add('active');
        bullets[index].classList.add('active');
      }, 0);
    }

    showContent(currentIndex);

    function nextSlide() {
      currentIndex = (currentIndex + 1) % contents.length;
      showContent(currentIndex);
    }

    function startSliderInterval() {
      sliderInterval = setInterval(nextSlide, 500000);
    }

    function resetSliderInterval() {
      clearInterval(sliderInterval);
      startSliderInterval();
    }

    bullets.forEach((bullet, index) => {
      bullet.addEventListener('click', () => {
        currentIndex = index;
        showContent(index);
        resetSliderInterval();
      });
    });

    startSliderInterval();

</script>


