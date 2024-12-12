// Smooth scrolling for navigation links
document.querySelectorAll('header nav ul li a').forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault();
        const section = document.querySelector(this.getAttribute('href'));
        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});

// Interactive hover effect for the cards
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
    card.addEventListener('mouseover', () => {
        card.style.boxShadow = '0 10px 20px rgba(106, 13, 173, 0.5)';
        card.style.transform = 'scale(1.1)';
    });

    card.addEventListener('mouseout', () => {
        card.style.boxShadow = 'none';
        card.style.transform = 'scale(1)';
    });
});

// Form submission functionality
const form = document.querySelector('.contact form');

form.addEventListener('submit', function (event) {
    event.preventDefault();

    const name = document.querySelector('#name').value;
    const email = document.querySelector('#email').value;
    const message = document.querySelector('#message').value;

    if (name && email && message) {
        alert(`Thank you, ${name}! Your message has been received.`);
        form.reset();
    } else {
        alert('Please fill in all the fields.');
    }
});
