// Add interactivity (e.g., booking modal, smooth scrolling)
document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      target.scrollIntoView({ behavior: 'smooth' });
    });
  });
   
  // Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// Modal functionality
var modal = document.getElementById("booking-modal");
var btn = document.querySelector(".book-btn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// JavaScript for showing and hiding reviews on hover
function showReview(element) {
  const reviewPopup = element.querySelector('.review-popup');
  reviewPopup.style.opacity = '1';
  reviewPopup.style.visibility = 'visible';
}

function hideReview(element) {
  const reviewPopup = element.querySelector('.review-popup');
  reviewPopup.style.opacity = '0';
  reviewPopup.style.visibility = 'hidden';
}

document.querySelectorAll('.service-item').forEach((item) => {
  item.addEventListener('mouseover', () => {
      const popup = item.querySelector('.review-popup');
      popup.style.display = 'block';
  });

  item.addEventListener('mouseout', () => {
      const popup = item.querySelector('.review-popup');
      popup.style.display = 'none';
  });
});
