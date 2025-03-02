// ====== 1.1 header (aside navigation bar) ======
if (document.getElementById("mySidenav")) {
  function open_aside() {
    "use strict";
    const sidepanel = document.getElementById("mySidenav");
    if (sidepanel) {
      sidepanel.style.left = "0";
    } else {
      console.error("Error: Side panel element not found!");
    }
  }
  function close_aside() {
    "use strict";
    const sidepanel = document.getElementById("mySidenav");
    if (sidepanel) {
      sidepanel.style.left = "-355px";
    } else {
      console.error("Error: Side panel element not found!");
    }
  }
  // aside page button
  let slid = document.getElementById("slid-btn");
  if (slid !== null) {
    slid.onclick = () => {
      let dropdwon = document.getElementById("slid-drop");
      dropdwon.classList.toggle("aside-dropdwon");
    };
  }
}

// ====== 1.1 header (dropdown bar) ======
const dropdowns = document.querySelectorAll(".navbar .dropdown");
dropdowns.forEach((dropdown) => {
  const dropdownMenu = dropdown.querySelector(".dropdown-menu");
  dropdownMenu.style.maxHeight = "0";
  dropdown.addEventListener("mouseenter", () => {
    dropdownMenu.style.visibility = "visible";
    dropdownMenu.style.maxHeight = `${dropdownMenu.scrollHeight}px`;
  });
  dropdown.addEventListener("mouseleave", () => {
    dropdownMenu.style.visibility = "hidden";
    dropdownMenu.style.maxHeight = "0";
  });
});

// ====== 1.1. Header section === Search Icon
if (document.querySelector(".Search_Icon")) {
  const radio = document.querySelector(".Search_checkbox");
  const searchIcon = document.querySelector(".Search_Icon");
  const searchInput = document.querySelector(".search_input");
  const getStartedAnchor = document.getElementById("getStartedAnchor");
  document.addEventListener("click", (event) => {
    if (!searchIcon.contains(event.target)) {
      radio.checked = false;
      searchInput.value = "";
      getStartedAnchor.style.display = "block";
    } else {
      getStartedAnchor.style.display = "none";
    }
  });
}

// ======== 1.11. Testimional section =======
if (document.querySelector(".Testimonial_Slider1")) {
  $(".Testimonial_Slider1").slick({
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 20000,
    cssEase: "linear",
    slidesToShow: 2,
    slidesToScroll: 1,
    rtl: false,
    pauseOnHover: true,
    draggable: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
}
if (document.querySelector(".Testimonial_Slider2")) {
  $(".Testimonial_Slider2").slick({
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 20000,
    cssEase: "linear",
    slidesToShow: 2,
    slidesToScroll: 1,
    rtl: true,
    pauseOnHover: true,
    draggable: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
}

// ========== 1.13. Partners Slider  =========
$(document).ready(function () {
  if ($(".Partners_Slider1").length) {
    $(".Partners_Slider1").slick({
      arrows: false,
      dots: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 8000,
      cssEase: "linear",
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 5,
          },
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 361,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
  }
});
$(document).ready(function () {
  if ($(".Partners_Slider2").length) {
    $(".Partners_Slider2").slick({
      arrows: false,
      dots: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 8000,
      cssEase: "linear",
      slidesToShow: 6,
      slidesToScroll: 1,
      rtl: true,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 5,
          },
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 361,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
  }
});

//  1.14. ContactUs section === Submit message
const contactForm = document.querySelector(".ContactUs form");

if (contactForm !== null) {
  contactForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form from submitting normally

    const formData = new FormData(contactForm); // Collect form data

    // Manually append the submit value
    formData.append("contactSubmit", "true");

    // Log formData to ensure it's populated
    for (const [key, value] of formData.entries()) {
      console.log(`${key}: ${value}`);
    }

    const path = document.querySelector(".ContactUs .modal img").getAttribute("src");
    document.querySelector(".ContactUs .modal img").setAttribute("src", ""); // Clear the image
    var modal = new bootstrap.Modal(document.querySelector(".ContactUs .modal"));
    modal.show(); // Show the modal

    // Reset the form
    contactForm.reset();

    // Restore the image in the modal
    document.querySelector(".ContactUs .modal img").setAttribute("src", path);

    // Send form data using fetch (AJAX submission)
    fetch('insert', {
      method: 'POST',
      body: formData
    })
        .then(response => response.json())
        .then(data => {
          // If the form submission was successful
          console.log(data);
          if (data.status === 'success') {

            // Hide the modal after 5 seconds
            setTimeout(() => {
              modal.hide();
            }, 5000);
          } else {
            alert('There was an issue with your submission');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Error submitting form. Please try again later.');
        });
  });
}

// ======= 1.15. Footer Date ========
if (document.getElementById("year")) {
  document.addEventListener("DOMContentLoaded", function () {
    let currentYear = new Date().getFullYear();

    let yearElement = document.getElementById("year");
    yearElement.innerText = currentYear;
  });
}

//  1.15. Footer section === Submit message
const mainForm = document.querySelector("footer form");

if (mainForm !== null) {
  mainForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission

    const formData = new FormData(mainForm);
    formData.append("submitNewsletter", "true"); // Ensure the submit value is included

    // Handle modal logic
    const path = document
        .querySelector("footer .modal img")
        .getAttribute("src");
    document.querySelector("footer .modal img").setAttribute("src", ""); // Clear image
    var modal = new bootstrap.Modal(
        document.querySelector("footer .modal")
    );
    modal.show(); // Show modal

    // Reset form
    mainForm.reset();

    // Restore image in the modal
    document.querySelector("footer .modal img").setAttribute("src", path);


    // Send form data via AJAX
    fetch("insert", {
      method: "POST",
      body: formData,
    })
        .then((response) => response.json()) // Parse JSON response
        .then((data) => {
          console.log(data); // Debugging response

          if (data.status === "success") {

            // Hide modal after 5 seconds
            setTimeout(() => {
              modal.hide();
            }, 5000);
          } else {
            alert("There was an issue with your subscription. Please try again.");
          }
        })
        .catch((error) => {
          console.error("Error:", error);
          alert("Error submitting form. Please try again later.");
        });
  });
}


//  6.1. Quote section === Submit message
const QuoteForm = document.querySelector(".Quote form");
if (QuoteForm !== null)
  QuoteForm.addEventListener("submit", function (event) {
    const path = document
      .querySelector(".Quote .modal img")
      .getAttribute("src");
    document.querySelector(".Quote .modal img").setAttribute("src", "");
    event.preventDefault();
    var modal = new bootstrap.Modal(document.querySelector(".Quote .modal"));
    modal.show();
    document.querySelector(".Quote form").reset();
    document.querySelector(".Quote .modal img").setAttribute("src", path);
    setTimeout(() => {
      modal.hide();
    }, 5000);
  });

// =============== 12.1. Blog ============
document.addEventListener("DOMContentLoaded", function () {
  let currentDate = new Date();
  let formattedDate = currentDate.toLocaleDateString("en-US", {
    month: "long",
    day: "numeric",
    year: "numeric",
  });

  let dateElements = document.getElementsByClassName("date");
  for (let i = 0; i < dateElements.length; i++) {
    dateElements[i].innerText = formattedDate;
  }
});

// ========== Numbers Animations for spans =======
function animateNumbers(num, finalValue, duration) {
  let start = null;
  const finalValueStr = num.getAttribute("data-final-value");
  const charCount = finalValueStr.length;
  num.style.display = "inline-block";
  num.style.width = `${charCount}ch`;
  const numberFormatter = new Intl.NumberFormat("en-US");
  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = Math.min((timestamp - start) / duration, 1);
    num.textContent = numberFormatter.format(Math.floor(progress * finalValue));
    if (progress < 1) {
      window.requestAnimationFrame(step);
    } else {
      num.style.display = "inline";
    }
  }
  window.requestAnimationFrame(step);
}
function startNumberAnimation() {
  const numbers = document.querySelectorAll(".number");
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const finalValue = parseInt(
            entry.target.getAttribute("data-final-value")
          );
          animateNumbers(entry.target, finalValue, 2000);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 }
  );
  numbers.forEach((num) => observer.observe(num));
}
startNumberAnimation();
window.addEventListener("load", startNumberAnimation);

// scroll to top button
if (document.querySelector(".scrollToTopButton")) {
  document.addEventListener("DOMContentLoaded", function () {
    toggleButtonVisibility();
  });
  var backToTopButton = document.querySelector(".scrollToTopButton");
  var circle = document.querySelector(".progress-ring__circle");
  var radius = circle.r.baseVal.value;
  var circumference = radius * 2 * Math.PI;
  circle.style.strokeDasharray = `${circumference} ${circumference}`;
  circle.style.strokeDashoffset = `${circumference}`;
  function toggleButtonVisibility() {
    if (window.scrollY > 300) {
      backToTopButton.classList.add("show-btn");
    } else {
      backToTopButton.classList.remove("show-btn");
    }
    var scrollPercentage =
      (document.documentElement.scrollTop + document.body.scrollTop) /
      (document.documentElement.scrollHeight -
        document.documentElement.clientHeight);
    var offset = circumference - scrollPercentage * circumference;
    circle.style.strokeDashoffset = offset;
  }
  window.addEventListener("scroll", function () {
    toggleButtonVisibility();
  });
  backToTopButton.addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
    setTimeout(() => (circle.style.strokeDashoffset = circumference), 500);
  });
}
