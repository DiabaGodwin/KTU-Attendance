
function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    var content = document.getElementById("content");
    if (sidebar.classList.contains("active")) {
        sidebar.classList.remove("active");
        content.classList.remove("active");
    } else {
        sidebar.classList.add("active");
        content.classList.add("active");
    }
}