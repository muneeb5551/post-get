function toggleDropdown(element) {
    const content = element.nextElementSibling;
    const icon = element.querySelector('.toggle-icon');
    
    if (content.style.maxHeight) {
      // Collapse the dropdown
      content.style.maxHeight = null;
      content.classList.remove("open");
      icon.textContent = "+";
    } else {
      // Expand the dropdown
      content.style.maxHeight = content.scrollHeight + "px";
      content.classList.add("open");
      icon.textContent = "-";
    }
  }
  let currentIndex = 0;
  const slides = document.querySelectorAll('.carousel-item');
  
  function showNextSlide() {
    slides[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].classList.add('active');
  }
  
  // Slide changes every 2 seconds
  setInterval(showNextSlide, 2000);
  