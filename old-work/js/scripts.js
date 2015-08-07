// Used when an anchor link is clicked, to bring the user to another section of the page.
// This is needed in addition to toggleMenu because of the possibility that the user will
// click on a menu link, setting the visibility state to something we don't want if they
// enter responsive mode and click the Menu button.
function closeMenu() {
    // get current visibility value
    var visibilityValue = $('#fullscreenMenuContainer').css("visibility");

    // if visibility is visible, toggle to hidden
    if (visibilityValue == "visible") {
        visibilityValue = $('#fullscreenMenuContainer').css("visibility", "hidden");
    }
}

function displayHiddenContent(button, currentID) {
    $(currentID).toggleClass("show");

    // show "Hide Details..." as the button text if details are currently expanded
    if ($(currentID).hasClass("show")) {
        $(button).html("Hide Details&hellip;");
    }

    // show "View More Details..." as the button text if details are currently hidden
    else {
        $(button).html("View More Details&hellip;");
    }
}