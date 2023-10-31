// for dropdowns subdropdowns and sidebar
document.addEventListener("DOMContentLoaded", function () {
    const toggleButtonShow = document.getElementById("toggle-show");
    const toggleButtonCross = document.getElementById("toggle-cross");
    const toggleMenuButtons = document.querySelectorAll(".side-dropdown");
    const toggleSubMenuButtons = document.querySelectorAll(".side-sub-dropdown");
    const dropdowns = document.querySelectorAll(".side-dropdown-content");
    const subDropdowns = document.querySelectorAll(".side-sub-dropdown-content");
   
    const documentationBox = document.querySelector(".sidebar");

    toggleButtonShow.addEventListener("click", function () {
        documentationBox.classList.toggle("hidden");
    });
    toggleButtonCross.addEventListener("click", function() {
        documentationBox.classList.toggle("hidden");
    });
    
    toggleMenuButtons.forEach((toggleMenuButton, index) => {
        toggleMenuButton.addEventListener("click", function() {
            if (dropdowns[index]) {
                dropdowns[index].classList.toggle("hidden");
            }
        });
    });
    
    toggleSubMenuButtons.forEach((toggleSubMenuButton, index) => {
        toggleSubMenuButton.addEventListener("click", function(event) {
            event.stopPropagation();
            if (subDropdowns[index]) {
                subDropdowns[index].classList.toggle("hidden");
            }
        });
    });
});
