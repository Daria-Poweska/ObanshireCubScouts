// JavaScript //

document.addEventListener("DOMContentLoaded", () => {
  // Sticky header on scroll

  const selectHeader = document.querySelector("#header");
  if (selectHeader) {
    document.addEventListener("scroll", () => {
      window.scrollY > 100
        ? selectHeader.classList.add("sticked")
        : selectHeader.classList.remove("sticked");
    });
  }

  // Mobile nav toggle

  const mobileNavShow = document.querySelector(".mobile-nav-show");
  const mobileNavHide = document.querySelector(".mobile-nav-hide");

  document.querySelectorAll(".mobile-nav-toggle").forEach((el) => {
    el.addEventListener("click", function (event) {
      event.preventDefault();
      mobileNavToogle();
    });
  });

  function mobileNavToogle() {
    document.querySelector("body").classList.toggle("mobile-nav-active");
    mobileNavShow.classList.toggle("d-none");
    mobileNavHide.classList.toggle("d-none");
  }

  // Toggle mobile nav dropdowns

  const navDropdowns = document.querySelectorAll(".navbar .dropdown > a");

  navDropdowns.forEach((el) => {
    el.addEventListener("click", function (event) {
      if (document.querySelector(".mobile-nav-active")) {
        event.preventDefault();
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("dropdown-active");

        let dropDownIndicator = this.querySelector(".dropdown-indicator");
        dropDownIndicator.classList.toggle("bi-chevron-up");
        dropDownIndicator.classList.toggle("bi-chevron-down");
      }
    });
  });

  //  MODALS Badges
  const readMoreBtns = document.querySelectorAll(".read-more");

readMoreBtns.forEach((btn) => {
  btn.addEventListener("click", function () {
    const cardBody = this.closest(".card-body");
    const cardTitle = cardBody.querySelector(".card-title").textContent;
    const modalId = this.getAttribute('data-bs-target').replace('#', '');
    const badgeModal = new bootstrap.Modal(document.getElementById(modalId), {});
    const modalTitle = document.getElementById(modalId).querySelector(".modal-title");
    const modalText = document.getElementById(modalId).querySelector(".modal-body .textmodal");

    modalTitle.textContent = cardTitle;

    const modalTextElement = document.querySelector(`.modal-body .textmodal[data-card-title="${cardTitle}"]`);
    if (modalTextElement) {
      modalText.textContent = modalTextElement.textContent;
    } else {
      modalText.textContent = "Modal text not found for this card.";
    }

    badgeModal.show();
  });
});

document.querySelectorAll('.modal').forEach(modal => {
  modal.addEventListener('hidden.bs.modal', () => {
    const backdrop = document.querySelector('.modal-backdrop');
    if (backdrop) {
      backdrop.remove();
    }
    document.body.style.overflow = 'auto';
  });
});


  
  
});
