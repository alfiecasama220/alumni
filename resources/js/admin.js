
document.querySelector('.toggle-mode').addEventListener('click', function() {
    let body = document.body;
    let card = document.querySelector('.card');
    let cardHeader = document.querySelector('.card-header');
    let formControls = document.querySelectorAll('.form-control');
    let btnPrimary = document.querySelector('.btn-primary');

    // DASHBOARD
    let dashboardText = document.querySelector('#dashboardText');
    
    body.classList.toggle('dark-mode');
    body.classList.toggle('light-mode');
    
    card.classList.toggle('dark-mode');
    card.classList.toggle('light-mode');
    
    cardHeader.classList.toggle('dark-mode');
    cardHeader.classList.toggle('light-mode');

    formControls.forEach(function(control) {
        control.classList.toggle('dark-mode');
        control.classList.toggle('light-mode');
    });
    
    btnPrimary.classList.toggle('dark-mode');
    btnPrimary.classList.toggle('light-mode');
    
    this.textContent = body.classList.contains('dark-mode') ? 'Switch to Light Mode' : 'Switch to Dark Mode';
});



