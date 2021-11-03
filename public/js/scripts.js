
document.addEventListener('DOMContentLoaded', function() {

    const sidebarToggle = document.getElementById('sidebar-toggle')
    const sidebarOverlay = document.getElementById('sidebar-overlay')

     // Sidebar Toggle
     sidebarToggle.addEventListener('click', () => {
        const sidebarWrapper = document.getElementById('sidebar-wrapper')

        if (sidebarWrapper.style.display === 'block') {
            sidebarWrapper.style.display = 'none'
            sidebarOverlay.style.display = 'none'
        } else {
            sidebarWrapper.style.display = 'block'
            sidebarOverlay.style.display = 'block'
        }
    })

    // Sidebar Overlay
    sidebarOverlay.addEventListener('click', () => {
        const sidebarWrapper = document.getElementById('sidebar-wrapper')

        if (sidebarOverlay.style.display === 'block') {
            sidebarOverlay.style.display = 'none'
            sidebarWrapper.style.display = 'none'
        } else {
            sidebarOverlay.style.display = 'block'
            sidebarWrapper.style.display = 'block'
        }
    })

});



