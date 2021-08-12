/*==================== LINK ACTIVE ====================*/
function activeColor(className) {
    const links = $(`.${className}`);
    $(document).ready(function () {
        for (let link of links) {
            if (link.href && link.href == window.location) {
                link.className += ` active`;
            } else if (
                !link.href &&
                link.closest("a").href == window.location
            ) {
                link.className += ` active`;
            }
        }
    });
}

activeColor("nav-link");

activeColor("li-link");
