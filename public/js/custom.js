/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
document.addEventListener('DOMContentLoaded', function () {
  var menuToggle = document.getElementById('toggle-menu');
  var sidebar = document.querySelector(".sidebar");
  var closeSidebar = document.querySelector("#toggle-sidebar");
  var sidebarOverlay = document.querySelector('.sidebar-overlay');
  closeSidebar.addEventListener("click", function () {
    sidebar.classList.toggle("open");
  });
  menuToggle.addEventListener('click', function () {
    if (sidebar.style.display === "block") {
      sidebar.style.display = 'none';
      sidebarOverlay.style.display = "none";
    } else {
      sidebar.style.display = "block";
      sidebarOverlay.style.display = "block";
    }
  });
  sidebarOverlay.addEventListener('click', function () {
    if (sidebarOverlay.style.display === "none") {
      sidebar.style.display = 'block';
      sidebarOverlay.style.display = "block";
    } else {
      sidebar.style.display = "none";
      sidebarOverlay.style.display = "none";
    }
  });
});
/******/ })()
;