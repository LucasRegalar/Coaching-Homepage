const toggleNavBtn = document.getElementById("toggle-nav-btn");
const primaryNav = document.getElementById("primary-nav");

toggleNavBtn.addEventListener("click", () => {
  const visibility = primaryNav.getAttribute("data-visible");
  
  if (visibility === "false") {
    primaryNav.setAttribute("data-visible", "true");
    toggleNavBtn.setAttribute("aria-expanded", "true");
  } else if (visibility === "true") {
    primaryNav.setAttribute("data-visible", "false");
    toggleNavBtn.setAttribute("aria-expanded", "false");
  }
})