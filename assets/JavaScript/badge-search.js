// This code is used to filter the badges

document.addEventListener('DOMContentLoaded', function () {
  const badgeSearchInput = document.getElementById('badgeSearch');
  const badges = document.querySelectorAll('.badges');

  
  badges.forEach(function (badge) {
    badge.style.display = 'block';
  });

  badgeSearchInput.addEventListener('input', function () {
    const searchValue = badgeSearchInput.value.trim().toLowerCase();
    badges.forEach(function (badge) {
      const cardTitle = badge.querySelector('.card-title').textContent.trim().toLowerCase();
      const cardText = badge.querySelector('.card-text').textContent.trim().toLowerCase();
      if (cardTitle.includes(searchValue) || cardText.includes(searchValue)) {
        badge.style.display = 'block';
      } else {
        badge.style.display = 'none';
      }
    });
  });
});