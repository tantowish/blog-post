import './bootstrap';
import 'flowbite';


document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll("#navbar");

    links.forEach((link) => {
        if (link.getAttribute("href") === window.location.pathname) {
            link.classList.add("active");
            link.classList.remove("hover:bg-gray-100")
        }
    });

    var currentUrl = window.location.pathname;
    const sidebars = document.querySelectorAll("#sidebar");
    sidebars.forEach((sidebar) => {
        if (sidebar.getAttribute("href") === currentUrl) {
            sidebar.classList.add("active");
            sidebar.classList.remove("hover:bg-gray-100")
            const firstChild = sidebar.firstElementChild
            firstChild.classList.remove("group-hover:text-gray-900")
            firstChild.classList.add("active-sidebar")
        }
    });
    // if (sidebars[0].getAttribute("href") === currentUrl) {
    //     sidebars[0].classList.add("active");
    //     sidebars[0].classList.remove("hover:bg-gray-100")
    //     const firstChild = sidebars[0].firstElementChild
    //     firstChild.classList.remove("group-hover:text-gray-900")
    //     firstChild.classList.add("active-sidebar")
    // }
    // if (sidebars[1].getAttribute("href") === currentUrl || currentUrl.startsWith(desiredRoute)) {
    //     sidebars[1].classList.add("active");
    //     sidebars[1].classList.remove("hover:bg-gray-100")
    //     const firstChild = sidebars[1].firstElementChild
    //     firstChild.classList.remove("group-hover:text-gray-900")
    //     firstChild.classList.add("active-sidebar")
    // }

    // if (sidebars[2].getAttribute("href") === currentUrl || currentUrl.startsWith(desiredRoute)) {
    //     sidebars[2].classList.add("active");
    //     sidebars[2].classList.remove("hover:bg-gray-100")
    //     const firstChild = sidebars[2].firstElementChild
    //     firstChild.classList.remove("group-hover:text-gray-900")
    //     firstChild.classList.add("active-sidebar")
    // }
    
    // function previewImage(){
    //     const image = document.querySelector('#image')
    //     const imgPreview = document.querySelector('.img-preview')

    //     imgPreview.style.display = 'block'

    //     const oFReader = new FileReader()
    //     oFReader.readAsDataURL(image.files[0]);
        
    //     oFReader.onload = function(oFREvent){
    //         imgPreview.src = oFREvent.target.result
    //     };
    // }

});

