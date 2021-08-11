/*==================== LINK ACTIVE ====================*/
$(document).ready(function () {
    const links = $(".nav-link");
    for (let link of links) {
        if (link.href == window.location) {
            link.className = "nav-link active";
        }
    }
});
