document.addEventListener('DOMContentLoaded', function() {
    let menuToggle = document.getElementById('toggle-menu');
    let sidebar = document.querySelector(".sidebar");
    let closeSidebar = document.querySelector("#toggle-sidebar");
    let sidebarOverlay = document.querySelector('.sidebar-overlay');

    closeSidebar.addEventListener("click", () => {
        sidebar.classList.toggle("open");
    });

    menuToggle.addEventListener('click', () => {
        if (sidebar.style.display === "block") {
            sidebar.style.display = 'none';
            sidebarOverlay.style.display = "none";
        } else {
            sidebar.style.display = "block";
            sidebarOverlay.style.display = "block";
        }
    })

    sidebarOverlay.addEventListener('click', () => {
        if (sidebarOverlay.style.display === "none") {
            sidebar.style.display = 'block';
            sidebarOverlay.style.display = "block";
        } else {
            sidebar.style.display = "none";
            sidebarOverlay.style.display = "none";
        }
    });
});
