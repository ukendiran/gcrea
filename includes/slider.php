<style>
        /* Define styles for the slider container and images */
        .slider-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }
        
        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        
        .slider img {
            width: 100%;
            height: auto;
        }
    </style>


<div class="slider-container">
				<!-- Story Image Slider -->
				<div class="slider">
				
						<img class="w-100" src="images/training/anniversary-new-name-intro/1. 20th ANNIVERSARY & NEW NAME INDUCTION 13-09-2022.jpg" alt="20th ANNIVERSARY & NEW NAME INDUCTION">
			
						<img class="w-100" src="images/training/anniversary-new-name-intro/2. 20th ANNIVERSARY & NEW NAME INDUCTION 13-09-2022.jpg" alt="20th ANNIVERSARY & NEW NAME INDUCTION">
					
						<img class="w-100" src="images/training/anniversary-new-name-intro/4. 20th ANNIVERSARY & NEW NAME INDUCTION 13-09-2022.jpg" alt="20th ANNIVERSARY & NEW NAME INDUCTION">
			
						<img class="w-100" src="images/training/anniversary-new-name-intro/022A4624.jpg" alt="20th ANNIVERSARY & NEW NAME INDUCTION">
				
				</div>
</div>


 <script>
        const slider = document.querySelector('.slider');
        let slideIndex = 0;

        // Function to show the next slide
        function nextSlide() {
            slideIndex = (slideIndex + 1) % slider.children.length;
            updateSlider();
        }

        // Function to show the previous slide
        function prevSlide() {
            slideIndex = (slideIndex - 1 + slider.children.length) % slider.children.length;
            updateSlider();
        }

        // Function to update the slider position
        function updateSlider() {
            slider.style.transform = `translateX(-${slideIndex * 100}%)`;
        }

        // Automatically advance to the next slide every 3 seconds
        setInterval(nextSlide, 3000);
    </script>