// input color
document.addEventListener("DOMContentLoaded", function () {
  document.body.addEventListener("focusin", function (event) {
    if (event.target.classList.contains("form-control")) {
      event.target.style.borderColor = "rgb(201, 79, 132)";
      event.target.style.boxShadow = "0 0 10px rgb(201, 79, 132)";
    }
  });

  document.body.addEventListener("focusout", function (event) {
    if (event.target.classList.contains("form-control")) {
      event.target.style.borderColor = "";
      event.target.style.boxShadow = "";
    }
  });
});

// Add event listener for custom checkbox checked state
document.addEventListener("DOMContentLoaded", function () {
  const customCheckbox = document.querySelector(
    '.custom-checkbox input[type="checkbox"]'
  );

  customCheckbox.addEventListener("change", function () {
    if (this.checked) {
      this.style.outline = "none";
      this.style.backgroundColor = "rgb(201, 79, 132)";
      this.style.borderColor = "rgb(201, 79, 132)";
      this.style.boxShadow = "0 0 10px rgb(201, 79, 132)";
    } else {
      this.style.outline = "";
      this.style.backgroundColor = "";
      this.style.borderColor = "rgb(201, 79, 132)";
      this.style.boxShadow = "0 0 10px rgb(201, 79, 132)";
    }
  });

  customCheckbox.addEventListener("focus", function () {
    this.style.outline = "none";
    this.style.borderColor = "rgb(201, 79, 132)";
    this.style.boxShadow = "0 0 10px rgb(201, 79, 132)";
  });

  customCheckbox.addEventListener("blur", function () {
    this.style.outline = "";
    this.style.borderColor = "";
    this.style.boxShadow = "";
  });
});

//button color change
document.addEventListener("DOMContentLoaded", function () {
  const submitButton = document.querySelector(".btn-primary");

  submitButton.addEventListener("mouseover", function () {
    this.style.backgroundColor = "rgb(201, 79, 132)"; // Change the color to your desired hover color
    this.style.borderColor = "rgb(201, 79, 132)"; // Change the border color if needed
  });

  submitButton.addEventListener("mouseout", function () {
    this.style.backgroundColor = ""; // Reset to default background color
    this.style.borderColor = ""; // Reset to default border color
  });
});

//link color change
document.addEventListener("DOMContentLoaded", function () {
  const linkButton = document.querySelector(".btn-link");

  linkButton.addEventListener("click", function () {
    this.style.color = "rgb(105, 2, 47)"; // Change the color to your desired click color
  });

  linkButton.addEventListener("mouseover", function () {
    this.style.color = "rgb(105, 2, 47)"; // Change the color to your desired hover color
  });
  linkButton.addEventListener("mouseout", function () {
    this.style.color = ""; // Reset to default color on mouseout
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Toggle Sidenav
  const iconNavbarSidenav = document.getElementById("iconNavbarSidenav");
  const iconSidenav = document.getElementById("iconSidenav");
  const sidenav = document.getElementById("sidenav-main");
  let body = document.getElementsByTagName("body")[0];
  let className = "g-sidenav-pinned";

  if (iconNavbarSidenav) {
    iconNavbarSidenav.addEventListener("click", toggleSidenav);
  }

  if (iconSidenav) {
    iconSidenav.addEventListener("click", toggleSidenav);
  }

  function toggleSidenav() {
    body.classList.toggle(className);
    sidenav.classList.toggle("", body.classList.contains(className));
    iconSidenav.classList.toggle("d-none", !body.classList.contains(className));
  }

  // Deactivate sidenav type buttons on resize and small screens
  window.addEventListener("resize", sidenavTypeOnResize);
  window.addEventListener("load", sidenavTypeOnResize);

  function sidenavTypeOnResize() {
    let elements = document.querySelectorAll('[onclick="sidebarType(this)"]');
    if (window.innerWidth < 1200) {
      elements.forEach(function (el) {
        el.classList.add("disabled");
      });
    } else {
      elements.forEach(function (el) {
        el.classList.remove("disabled");
      });
    }
  }
});

// Set Navbar Fixed
function navbarFixed(el) {
  let classes = [
    "position-sticky",
    "fixed-navbar", // Use the custom fixed-navbar class
    "top-0", // Adjust as needed
    "z-index-sticky",
  ];
  const navbar = document.getElementById("navbarBlur");

  navbar.classList.add(...classes);
  navbar.setAttribute("navbar-scroll", "true");
  navbarBlurOnScroll("navbarBlur");
  el.setAttribute("checked", "true");
}

// Call the navbarFixed function with an element (you can pass the element as an argument based on your implementation)
navbarFixed(document.getElementById("yourCheckboxId"));

// Navbar blur on scroll
function navbarBlurOnScroll(id) {
  const navbar = document.getElementById(id);
  let navbarScrollActive = navbar ? navbar.getAttribute("data-scroll") : false;
  let scrollDistance = 5;
  let classes = ["blur", "shadow-blur", "left-auto"];
  let toggleClasses = ["shadow-none"];

  if (navbarScrollActive == "true") {
    window.onscroll = debounce(function () {
      if (window.scrollY > scrollDistance) {
        blurNavbar();
      } else {
        transparentNavbar();
      }
    }, 10);
  } else {
    window.onscroll = debounce(function () {
      transparentNavbar();
    }, 10);
  }

  var isWindows = navigator.platform.indexOf("Win") > -1 ? true : false;

  if (isWindows) {
    var content = document.querySelector(".main-content");
    if (navbarScrollActive == "true") {
      content.addEventListener(
        "ps-scroll-y",
        debounce(function () {
          if (content.scrollTop > scrollDistance) {
            blurNavbar();
          } else {
            transparentNavbar();
          }
        }, 10)
      );
    } else {
      content.addEventListener(
        "ps-scroll-y",
        debounce(function () {
          transparentNavbar();
        }, 10)
      );
    }
  }

  function blurNavbar() {
    navbar.classList.add(...classes);
    navbar.classList.remove(...toggleClasses);

    toggleNavLinksColor("blur");
  }

  function transparentNavbar() {
    navbar.classList.remove(...classes);
    navbar.classList.add(...toggleClasses);

    toggleNavLinksColor("transparent");
  }

  function toggleNavLinksColor(type) {
    let navLinks = document.querySelectorAll(".navbar-main .nav-link");
    let navLinksToggler = document.querySelectorAll(
      ".navbar-main .sidenav-toggler-line"
    );

    if (type === "blur") {
      navLinks.forEach((element) => {
        element.classList.remove("");
      });

      navLinksToggler.forEach((element) => {
        element.classList.add("");
      });
    } else if (type === "transparent") {
      navLinks.forEach((element) => {
        element.classList.add("");
      });

      navLinksToggler.forEach((element) => {
        element.classList.remove("");
      });
    }
  }
}

// Debounce Function
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
  var timeout;
  return function () {
    var context = this,
      args = arguments;
    var later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

function confirmerModification() {
  var confirmation = confirm(
    "Êtes-vous sûr de vouloir continuer les modifications ?"
  );
  return confirmation;
}
