<script>
  // ===== Navbar toggler active state
  const navbarTogglerNine = document.querySelector(
    ".navbar-nine .navbar-toggler"
  );

  if (navbarTogglerNine) {
    navbarTogglerNine.addEventListener("click", function () {
      this.classList.toggle("active");
    });
  }

  // ===== Sidebar toggle
  const sidebarLeft = document.querySelector(".sidebar-left");
  const overlayLeft = document.querySelector(".overlay-left");
  const sidebarClose = document.querySelector(".sidebar-close .close");
  const sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

  if (sideMenuLeftNine) {
    sideMenuLeftNine.addEventListener("click", function (e) {
      e.preventDefault();
      sidebarLeft.classList.add("open");
      overlayLeft.classList.add("open");
    });
  }

  if (overlayLeft) {
    overlayLeft.addEventListener("click", function () {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });
  }

  if (sidebarClose) {
    sidebarClose.addEventListener("click", function (e) {
      e.preventDefault();
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });
  }

  // ===== GLightbox
  if (typeof GLightbox !== "undefined") {
    GLightbox({
      width: 900,
      autoplayVideos: true,
    });
  }
</script>
