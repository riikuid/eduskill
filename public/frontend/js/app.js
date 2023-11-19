// Function to create a star element
function createStar() {
    const star = document.createElement("img");
    star.src = "/src/assets/pages/Courses/star.svg";
    star.classList.add("w-3");
    return star;
  }

  // Number of containers
  const numContainers = 3;

  // Loop through containers and add stars
  for (
    let containerIndex = 1;
    containerIndex <= numContainers;
    containerIndex++
  ) {
    const containerId = `starContainer${containerIndex}`;
    const container = document.getElementById(containerId);

    // Check if the container exists before appending stars
    if (container) {
      for (let i = 0; i < 3; i++) {
        container.appendChild(createStar());
      }
    }
  }

  //slider
  let sliderIndex = 0;

    function toggleSlider() {
      const slider = document.getElementById('slider');
      const totalSlides = slider.children.length;

      // Increment the index or reset it to 0
      sliderIndex = (sliderIndex + 1) % totalSlides;

      // Update the transform property to move to the next slide
      slider.style.transform = `translateX(-${sliderIndex * 100}%)`;
    }

    function showCourse(courseId) {
      const slider = document.getElementById('slider');
      const courseElements = Array.from(slider.children);

      // Find the index of the selected course
      const index = courseElements.findIndex(course => course.id === courseId);

      // Move the selected course to the first position
      const newIndex = (sliderIndex + courseElements.length - index) % courseElements.length;
      slider.style.transform = `translateX(-${newIndex * 100}%)`;

      // Update the slider index
      sliderIndex = newIndex;
    }
