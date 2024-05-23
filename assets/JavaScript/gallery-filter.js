// Gallery Filter

document.addEventListener("DOMContentLoaded", function () {
  const filterItems = document.querySelectorAll(".filter-item");
  const galleryItems = document.querySelectorAll(".gallery-item");

  function filterSelection(filterClass) {
    galleryItems.forEach(function (item) {
      if (filterClass === "*" || item.classList.contains(filterClass)) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  }

  // Initialize with all items displayed
  filterSelection("*");

  filterItems.forEach(function (btn) {
    btn.addEventListener("click", function () {
      const current = document.querySelector(".filter-item.active");
      current.classList.remove("active");
      this.classList.add("active");
      const filterClass = this.dataset.filter.replace(".", "");
      filterSelection(filterClass);
    });
  });
});
