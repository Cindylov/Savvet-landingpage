document.addEventListener('DOMContentLoaded', function() {
  const locationText = document.getElementById('locationText');
  const shakeClass = 'tada';

  // Function to add shake animation
  function addShakeAnimation() {
      setTimeout(()=>{
        locationText.classList.add(shakeClass);
      }, 1000);
      // Remove the class after animation ends to reset for future animations
      setTimeout(() => {
          locationText.classList.remove(shakeClass);
      }, 7000); // Adjust this timeout to match the duration of animate__tada
    }
    
    // Apply the animation immediately for screens >= 992px
    if (window.innerWidth >= 992) {
      addShakeAnimation();
      locationText.addEventListener('mouseenter', addShakeAnimation);
    } else {
      addShakeAnimation();
      // For smaller screens, repeat the animation every minute
      setInterval(addShakeAnimation, 5000); // 60,000ms = 1 minute
  }
});


document.addEventListener('DOMContentLoaded', function() {
  let noteDiv = document.getElementById('noteDiv');
  let perfectSpotText = document.getElementById('perfectSpotText');
  let rightStroke = document.getElementById('rightStroke');
  let leftStroke = document.getElementById('leftStroke');

  let perfectSpotTextMd = document.getElementById('perfectSpotTextMd');
  let rightStrokeMd = document.getElementById('rightStrokeMd');
  let leftStrokeMd = document.getElementById('leftStrokeMd');

  let perfectSpotTextSm = document.getElementById('perfectSpotTextSm');
  let rightStrokeSm = document.getElementById('rightStrokeSm');
  let leftStrokeSm = document.getElementById('leftStrokeSm');
  
  perfectSpotTextMd.classList.add('breathing');
  rightStrokeMd.classList.add('breathing-opacity');
  leftStrokeMd.classList.add('breathing-opacity');
  
  perfectSpotTextSm.classList.add('breathing');
  rightStrokeSm.classList.add('breathing-opacity');
  leftStrokeSm.classList.add('breathing-opacity');
  

  noteDiv.addEventListener('mouseenter', ()=>{
    perfectSpotText.classList.add('breathing');
    rightStroke.classList.remove('opacity-50');
    rightStroke.classList.add('opacity-100');
    rightStroke.style.transform = 'scale(1.3)';
    leftStroke.classList.remove('opacity-50');
    leftStroke.classList.add('opacity-100');
    leftStroke.style.transform = 'scale(1.3)';
  });
  noteDiv.addEventListener('mouseleave', ()=>{
    perfectSpotText.style.transition = 'transform .3s ease-in';
    perfectSpotText.classList.remove('breathing');
    rightStroke.classList.remove('opacity-100');
    rightStroke.classList.add('opacity-50');
    rightStroke.style.transform = 'scale(1)';
    leftStroke.classList.remove('opacity-100');
    leftStroke.classList.add('opacity-50');
    leftStroke.style.transform = 'scale(1)';
  });

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
  const imageVectorMd = section.querySelector("#pop-out-img-md");
  const buttons = section.querySelector("#prev-next-btn");

  // Observer for triggering animations
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && window.innerWidth >= 1024) {
          // Add a 2-second delay before starting animations
          setTimeout(() => {
            // Step 1: Fade out text
            strokeText.classList.add("fade-out");
            setTimeout(()=>{
              strokeText.classList.add('z-50');
              strokeText.classList.add('hidden');
            }, 1000); //hide strokeText after fading

            // Step 2: Scale out text
            setTimeout(() => {
              scaleText.classList.add("scale-out");
            }, 1000); // Delayed by 1000ms after fade out
            // Step 2.1: hide text
            setTimeout(() => {
              scaleText.classList.add("hidden");
            }, 1300); // Delayed by 1000ms after fade out


            // Step 3: Reveal and translate hidden text
            setTimeout(() => {
              hiddenText.classList.replace("opacity-0", "opacity-1");
              hiddenText.style.transform = "translateX(-450px)";
            }, 1500); // Delayed by 1.5s after fade out

            // Step 4: Pop out image
            setTimeout(() => {
              imageVector.classList.replace("opacity-0", "opacity-1");
              imageVector.classList.add("pop-out");
            }, 2200); // Delayed by 2.2s after fade out

            // Step 5: Reveal buttons
            setTimeout(() => {
              buttons.classList.replace("hidden", "flex");
              buttons.classList.replace("opacity-0", "opacity-100");
            }, 2700); // Delayed by 2s after fade out
          }, 1000); // Initial 2-second delay before starting
        }

        else if(entry.isIntersecting && window.innerWidth >= 900 && window.innerWidth < 1024){
          // Add a 1-second delay before starting animations
          setTimeout(() => {
            // Step 1: Fade out text
            strokeText.classList.add("fade-out");
            setTimeout(()=>{
              strokeText.classList.add('z-50');
              strokeText.classList.add('hidden');
            }, 1000); //hide strokeText after fading

            // Step 2: Scale out text
            setTimeout(() => {
              scaleText.classList.add("scale-out");
            }, 1000); // Delayed by 1000ms after fade out
            // Step 2.1: hide text
            setTimeout(() => {
              scaleText.classList.add("hidden");
            }, 1300); // Delayed by 1000ms after fade out

            // Step 3: Reveal and translate hidden text
            setTimeout(() => {
              hiddenText.classList.replace("opacity-0", "opacity-1");
              hiddenText.style.transform = "translateY(-270px) translateX(-110px)";
            }, 1500); // Delayed by 1.5s after fade out

            // Step 4: Pop out image
            setTimeout(() => {
              imageVectorMd.classList.replace("opacity-0", "opacity-1");
              imageVectorMd.classList.add("pop-out");
            }, 2200); // Delayed by 2.2s after fade out

            // Step 5: Reveal buttons
            setTimeout(() => {
              buttons.classList.replace("hidden", "flex");
              buttons.classList.replace("opacity-0", "opacity-100");
            }, 2700); // Delayed by 2s after fade out
          }, 1000); // Initial 2-second delay before starting
        }

        else if(entry.isIntersecting && window.innerWidth >= 768 && window.innerWidth < 900){
          // Add a 1-second delay before starting animations
          setTimeout(() => {
            // Step 1: Fade out text
            strokeText.classList.add("fade-out");
            setTimeout(()=>{
              strokeText.classList.add('z-50');
              strokeText.classList.add('hidden');
            }, 1000); //hide strokeText after fading

            // Step 2: Scale out text
            setTimeout(() => {
              scaleText.classList.add("scale-out");
            }, 1000); // Delayed by 1000ms after fade out
            // Step 2.1: hide text
            setTimeout(() => {
              scaleText.classList.add("hidden");
            }, 1300); // Delayed by 1000ms after fade out

            // Step 3: Reveal and translate hidden text
            setTimeout(() => {
              hiddenText.classList.replace("opacity-0", "opacity-1");
              hiddenText.style.transform = "translateY(-280px) translateX(-110px)";
            }, 1500); // Delayed by 1.5s after fade out

            // Step 4: Pop out image
            setTimeout(() => {
              imageVectorMd.classList.replace("opacity-0", "opacity-1");
              imageVectorMd.classList.add("pop-out");
            }, 2200); // Delayed by 2.2s after fade out

            // Step 5: Reveal buttons
            setTimeout(() => {
              buttons.classList.replace("hidden", "flex");
              buttons.classList.replace("opacity-0", "opacity-100");
            }, 2700); // Delayed by 2s after fade out
          }, 1000); // Initial 2-second delay before starting
        }

        else if(entry.isIntersecting && window.innerWidth < 768){
          // Add a 1-second delay before starting animations
          setTimeout(() => {
            // Step 1: Fade out text
            strokeText.classList.add("fade-out");
            setTimeout(()=>{
              strokeText.classList.add('z-50');
              strokeText.classList.add('hidden');
            }, 1000); //hide strokeText after fading

            // Step 2: Scale out text
            setTimeout(() => {
              scaleText.classList.add("scale-out");
            }, 1000); // Delayed by 1000ms after fade out
            // Step 2.1: hide text
            setTimeout(() => {
              scaleText.classList.add("hidden");
            }, 1300); // Delayed by 1000ms after fade out

            // Step 3: Reveal and translate hidden text
            setTimeout(() => {
              hiddenText.classList.replace("opacity-0", "opacity-1");
              hiddenText.style.transform = "translateY(-260px) translateX(-110px)";
            }, 1500); // Delayed by 1.5s after fade out

            // Step 4: Pop out image
            setTimeout(() => {
              imageVectorMd.classList.replace("opacity-0", "opacity-1");
              imageVectorMd.classList.add("pop-out");
            }, 2200); // Delayed by 2.2s after fade out

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
let previousWidth = window.innerWidth;

window.addEventListener('resize', () => {
    const currentWidth = window.innerWidth;

    // Check if the screen width crosses 992px
    if ((previousWidth < 1199 && currentWidth >= 1199) || (previousWidth >= 1199 && currentWidth < 1199) || (previousWidth < 992 && currentWidth >= 992) || (previousWidth >= 992 && currentWidth < 992) || (previousWidth < 1024 && currentWidth >= 1024) || (previousWidth >= 1024 && currentWidth < 1024) || (previousWidth < 768 && currentWidth >= 768) || (previousWidth >= 768 && currentWidth < 768)) {
        window.location.reload(); // Reload the page
    }

    previousWidth = currentWidth; // Update the previous width
});

document.addEventListener('DOMContentLoaded', () => {
  let textSpace = document.getElementById('textSpace');
  let firstText = document.getElementById('firstText');
  let secondText = document.getElementById('secondText');
  let thirdText = document.getElementById('thirdText');
  let fourthText = document.getElementById('fourthText');
  let fifthText = document.getElementById('fifthText');
  let sixthText = document.getElementById('sixthText');
  let seventhText = document.getElementById('seventhText');
  let eightText = document.getElementById('eightText');
  let textRedTape = document.getElementById('textRedTape');

  let isScatter = true; // To track which function should be called
  let intervalId = null; // Stores the interval ID

  let scatter = () => {
      firstText.style.transform = 'rotate(21deg) translateX(-10px)';
      secondText.style.transform = 'rotate(-7deg)';
      thirdText.style.transform = 'rotate(-7deg) translateX(60px)';
      fourthText.style.transform = 'translateX(-280px) translateY(80px)';
      fifthText.style.transform = 'rotate(-3deg)';
      fifthText.style.transformOrigin = '0 0';
      sixthText.style.transform = 'rotate(-20deg) translateX(-65px) translateY(10px)';
      seventhText.style.transform = 'rotate(20deg) translateX(10px) translateY(10px)';
      eightText.style.transform = 'rotate(-20deg) translateX(10px) translateY(10px)';
      textRedTape.style.transform = 'rotate(-45deg)';
      textRedTape.style.transformOrigin = '0 0';
  };

  let variant = () => {
      firstText.style.transform = 'rotate(-10.59deg) translateX(10px) translateY(20px)';
      secondText.style.transform = 'rotate(17deg) translateX(10px) translateY(50px)';
      thirdText.style.transform = 'rotate(7deg) translateX(110px) translateY(15px)';
      fourthText.style.transform = 'translateX(-300px) translateY(80px) rotate(-20deg)';
      fifthText.style.transform = 'rotate(6deg) translateY(10px) translateX(10px)';
      fifthText.style.transformOrigin = '0 0';
      sixthText.style.transform = 'rotate(5deg) translateX(-75px) translateY(10px)';
      seventhText.style.transform = 'rotate(15deg) translateX(-110px) translateY(-20px)';
      eightText.style.transform = 'rotate(-10deg) translateX(-70px) translateY(40px)';
      textRedTape.style.transform = 'rotate(-45deg)';
      textRedTape.style.transformOrigin = '0 0';
  };

  if (window.innerWidth >= 1200) {
    // textSpace.addEventListener('mouseenter', () => {
    //     scatter(); // Call scatter when mouse enters
    //     isScatter = false; // Set to false so the next move triggers variant
    // });

    // textSpace.addEventListener('mousemove', () => {
    //     if (isScatter) {
    //         scatter();
    //     } else {
    //         variant();
    //     }
    //     isScatter = !isScatter; // Toggle between scatter and variant
    // });

    textSpace.addEventListener('mouseenter', () => {
      scatter(); // Execute immediately on mouseenter
      isScatter = false; // Set initial state for the next state change
      // Start an interval that switches between scatter and variant every 0.9 seconds
      if (!intervalId) {
          intervalId = setInterval(() => {
              if (isScatter) {
                  scatter();
              } else {
                  variant();
              }
              isScatter = !isScatter; // Toggle the state
          }, 900); // Change every 0.9 seconds
      }
    });

    textSpace.addEventListener('mouseleave', () => {
      clearInterval(intervalId); // Stop the periodic switching
      intervalId = null; // Reset interval ID
    });
  }

  if (window.innerWidth < 1200) {
      const swiper = new Swiper('.swiper-container', {
          loop: true,
          autoplay: {
              delay: 0,
              disableOnInteraction: false,
          },
          speed: 50000,
          spaceBetween: 10,
          freeMode: true,
          freeModeMomentum: false,
          allowTouchMove: true,
          preventClicks: true,
          preventClicksPropagation: true,
          simulateTouch: true,
          autoplay: {
              delay: 0,
              disableOnInteraction: false,
              pauseOnMouseEnter: false,
          },
      });
  }


});


