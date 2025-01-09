document.addEventListener('DOMContentLoaded', function () {
  const locationText = document.getElementById("locationText");

  // Add the vibration effect
  locationText.classList.add("animate-vibrate");

  // Remove the vibration effect after 3 seconds
  setTimeout(() => {
    locationText.classList.remove("animate-vibrate");
  }, 3000); // Adjust duration as needed
});

let menuBtn = document.getElementById("menuBtn");
let menuList = document.getElementById("menuList");
let closeMenuBtn = document.getElementById("closeMenuBtn");

function showMenuList() {
  menuBtn.classList.add("opacity-0"); // Immediately hide the menu button
  menuList.classList.remove("hidden"); // Ensure the menu list is visible

  // Trigger the transition
  setTimeout(() => {
    menuList.classList.remove("opacity-0", "scale-90");
    menuList.classList.add("opacity-100", "scale-100", "flex");
  }, 10); // Slight delay to allow rendering
}

function hideMenuList() {
  menuList.classList.remove("opacity-100", "scale-100");
  menuList.classList.add("opacity-0", "scale-90");
  // Wait for the transition to finish before fully hiding
  setTimeout(() => {
    menuList.classList.remove("flex");
    menuList.classList.add("hidden");
    menuBtn.classList.remove("opacity-0");
  }, 300); // Matches the duration-300 class (300ms)
}

menuBtn.addEventListener("click", showMenuList);
closeMenuBtn.addEventListener("click", hideMenuList);


document.addEventListener('DOMContentLoaded', function () {

  // red tape under mouse at navbar
  const navLinks = document.querySelectorAll('.navbar-link');
  const hoverImage = document.getElementById('hoverImage');

  navLinks.forEach((link) => {
    link.addEventListener('mouseenter', (e) => {
      // Get the link's position relative to its parent
      const { left, top, width, height } = e.target.getBoundingClientRect();
      const parentRect = e.target.parentElement.getBoundingClientRect();

      // Move the hover image
      if (window.innerWidth >= 992) {
        hoverImage.style.left = `${left - parentRect.left + width / 2 - hoverImage.offsetWidth / 2}px`;
        hoverImage.style.top = `${top - parentRect.top + 13}px`;
      }
      else if (window.innerWidth >= 767) {
        hoverImage.style.left = `${left - parentRect.left + width - hoverImage.offsetWidth}px`; // Align to the extreme left
        hoverImage.style.top = `${top - parentRect.top + 13}px`; // Position at the bottom edge
      }
      else {
        hoverImage.style.left = `${left - parentRect.left + width - hoverImage.offsetWidth}px`; // Align to the extreme left
        hoverImage.style.top = `${top - parentRect.top + 5}px`; // Position at the bottom edge
      }
    });

    link.addEventListener('mouseleave', () => {
      // Reset to origin
      if (window.innerWidth >= 992) {
        hoverImage.style.left = '22px';
        hoverImage.style.top = 'initial';
      }
      else if (window.innerWidth >= 767) {
        hoverImage.style.left = '20px';
        hoverImage.style.top = '22px';
      }
      else {
        hoverImage.style.left = '-7px';
        hoverImage.style.top = '15px';
      }
    });
  });


  // animations for video section
  const section = document.querySelector(".bg-videoSectionBg");
  const strokeText = section.querySelector("#fade-out-text");
  const scaleText = section.querySelector("#scale-out-text");
  const hiddenText = section.querySelector("#hidden-text");
  const imageVector = section.querySelector("#pop-out-img");
  const buttons = section.querySelector("#prev-next-btn");

  // Observer for triggering animations
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && window.innerWidth >= 1200) {
          // Add a 2-second delay before starting animations
          setTimeout(() => {
            // Step 1: Fade out text
            strokeText.classList.add("fade-out");

            // Step 2: Scale out text
            setTimeout(() => {
              scaleText.classList.add("scale-out");
            }, 1000); // Delayed by 500ms after fade out

            // Step 3: Reveal and translate hidden text
            setTimeout(() => {
              hiddenText.classList.replace("opacity-0", "opacity-1");
              hiddenText.style.transform = "translateX(-450px)";
            }, 1500); // Delayed by 1s after fade out

            // Step 4: Pop out image
            setTimeout(() => {
              imageVector.classList.replace("opacity-0", "opacity-1");
              imageVector.classList.add("pop-out");
            }, 2200); // Delayed by 1.5s after fade out

            // Step 5: Reveal buttons
            setTimeout(() => {
              buttons.classList.replace("hidden", "flex");
              buttons.classList.replace("opacity-0", "opacity-100");
            }, 2700); // Delayed by 2s after fade out
          }, 1000); // Initial 2-second delay before starting
        }
      });
    },
    { threshold: 0.5 }
  );

  // Start observing the section
  observer.observe(section);

});


// reload page when browser is resized below and above 992px
let hasReloaded = false;

window.addEventListener('resize', () => {
    const width = window.innerWidth;

    // Check if the page needs to reload based on the width
    if ((width < 992 || width >= 992) && !hasReloaded) {
        hasReloaded = true; // Prevent continuous reload
        location.reload();
    }
});

