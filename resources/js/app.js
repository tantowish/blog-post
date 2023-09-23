import './bootstrap';
import 'flowbite';

document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll("ul li a");

    links.forEach((link) => {
        if (link.getAttribute("href") === window.location.pathname) {
            link.classList.add("active");
            link.classList.remove("hover:bg-gray-100")
        }
    });
});

