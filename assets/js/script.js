'use strict' ;

/** 
 * navbar toggle in mobile
 */


const /** {NodeElement}  */  $navbar = document.querySelector("[data-navbar]");
const /** {NodeElement}  */  $navToggler = document.querySelector("[data-nav-toggler]");
$navToggler.addEventListener("click", () => $navbar.classList.toggle("active"));



/** 
 * Header scroll state
 */


const /** {NodeElement} */  $header = document.querySelector("[data-header]");

window.addEventListener("scroll", e => {
    $header.classList[window.scrollY > 50 ? "add" : "remove"]("active");



});






/** 
 * Add to favourite button toggle
 */

const /** {NodeList}  */  $toggleBtns = document.querySelectorAll("[data-toggle-btn]");
$toggleBtns.forEach($toggleBtn => {
    $toggleBtn.addEventListener("click", () => {
        $toggleBtn.classList.toggle("active");
    });
});







  // Accessibility and click toggle for dropdown menu
  const getStartedMenu = document.getElementById('getStartedMenu');
  const getStartedButton = document.getElementById('getStartedButton');

  getStartedButton.addEventListener('click', function(event) {
    event.preventDefault();
    const isOpen = getStartedMenu.classList.toggle('open');
    getStartedButton.setAttribute('aria-expanded', isOpen);
  });

  // Close the dropdown if clicked outside
  document.addEventListener('click', (event) => {
    if (!getStartedMenu.contains(event.target)) {
      getStartedMenu.classList.remove('open');
      getStartedButton.setAttribute('aria-expanded', false);
    }
  });

  // Keyboard navigation support: close on Escape key
  document.addEventListener('keydown', (event) => {
    if (event.key === "Escape") {
      if (getStartedMenu.classList.contains('open')) {
        getStartedMenu.classList.remove('open');
        getStartedButton.setAttribute('aria-expanded', false);
        getStartedButton.focus();
      }
    }
  });
// {/* <script> */}
//   const getStartedMenu = document.getElementById('getStartedMenu');
//   const getStartedButton = document.getElementById('getStartedButton');
//   const dropdown = document.getElementById('getStartedDropdown');

//   getStartedButton.addEventListener('click', function(e) {
//     e.preventDefault();
//     dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
//   });

//   // Optional: Hide dropdown when clicking outside
//   document.addEventListener('click', function(event) {
//     if (!getStartedMenu.contains(event.target)) {
//       dropdown.style.display = 'none';
//     }
//   });
// // </script>


/* Get-Started */


    // const getStartedButton = document.getElementById('getStartedButton');
    // const dropdownMenu = getStartedButton.nextElementSibling; // The dropdown menu

    // getStartedButton.addEventListener('click', function(event) {
    //     event.preventDefault();
    //     const isOpen = dropdownMenu.classList.toggle('active');
    //     getStartedButton.setAttribute('aria-expanded', isOpen);
    // });

    // // Close the dropdown if clicked outside
    // document.addEventListener('click', (event) => {
    //     if (!getStartedButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
    //         dropdownMenu.classList.remove('active');
    //         getStartedButton.setAttribute('aria-expanded', 'false');
    //     }
    // });

    // // Keyboard navigation support: close on Escape key
    // document.addEventListener('keydown', (event) => {
    //     if (event.key === "Escape") {
    //         if (dropdownMenu.classList.contains('active')) {
    //             dropdownMenu.classList.remove('active');
    //             getStartedButton.setAttribute('aria-expanded', 'false');
    //             getStartedButton.focus();
    //         }
    //     }
    // });




// /** 
//  * Display username and profile icon in navbar if logged in
//  */

// document.addEventListener("DOMContentLoaded", function () {
//   const username = localStorage.getItem('username');
//   const navAuth = document.getElementById('nav-auth-section');

//   if (navAuth) {
//     if (username) {
//       navAuth.innerHTML = `
//         <div style="display:flex; align-items:center; gap:10px;">
//           <img src="images/guest.png" alt="User" style="width:35px; height:35px; border-radius:50%;">
//           <span style="font-weight:bold;">${username}</span>
//         </div>
//       `;
//     } else {
//       navAuth.innerHTML = `
//         <a href="login.html" class="btn-link label-medium">Login</a>
//         <button class="btn btn-fill label-medium">Get Started</button>
//       `;
//     }
//   }
// });







// -------------------------------------------------------------------



document.getElementById("toggleButton").addEventListener("click", function() {
    const sidebar = document.getElementById("sidebar");
    if (sidebar.style.left === "0px") {
        sidebar.style.left = "-250px"; // Hide the sidebar
    } else {
        sidebar.style.left = "0px"; // Show the sidebar
    }
});
