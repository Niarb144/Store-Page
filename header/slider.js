let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const slider = document.querySelector('.slider');
        const slideWidth = 33.33; // Width of each slide in percentage
        const autoSlideDelay = 3000; // Delay in milliseconds between automatic slides

        function prevSlide() {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        }

        function nextSlide() {
            if (currentIndex < slides.length - 3) {
                currentIndex++;
                updateSlider();
            }
        }

        function updateSlider() {
            const translateX = currentIndex * -slideWidth;
            slider.style.transform = `translateX(${translateX}%)`;
        }

        // Automatic slide change
        setInterval(() => {
            if (currentIndex < slides.length - 3) {
                currentIndex++;
                updateSlider();
            } else {
                currentIndex = 0;
                updateSlider();
            }
        }, autoSlideDelay);