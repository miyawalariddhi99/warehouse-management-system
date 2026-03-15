// JavaScript for Counter Animation
const counters = document.querySelectorAll('.counter');
const speed = 200; // The speed of the counting animation

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText.replace('+', '');

        const increment = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment) + '+';
            setTimeout(updateCount, 20);
        } else {
            counter.innerText = target + '+';
        }
    };

    updateCount();
});

// Initialize Slick slider
$(document).ready(function () {
    $('.quotes').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 800,
        slidesToShow: 1,
        adaptiveHeight: true
    });
});

// Remove this part as it's not necessary and might interfere with the slider
// $(document).ready(function () {
//     $('.no-fouc').removeClass('no-fouc');
// });