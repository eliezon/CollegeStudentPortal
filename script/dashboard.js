function activateButton(button) {
    // Remove active class from all buttons
    var buttons = document.querySelectorAll('.sidebar-button button');
    buttons.forEach(function(btn) {
        btn.classList.remove('active');
    });
    // Add active class to the clicked button
    button.classList.add('active');
}

function showDashboard(){
    document.getElementById('dashboard').style.display="block";
}

function hideDashboard(){
    document.getElementById('dashboard').style.display="none";
}

function slide(direction) {
    const container = document.querySelector('.a-cards');
    const cardWidth = container.querySelector('.a-card').offsetWidth + 20; // Adjust for card width and margin

    container.scrollBy({
        left: direction * cardWidth, // Multiply by card width and direction to determine scroll distance
        behavior: 'smooth' // Enable smooth scrolling
    });
}
