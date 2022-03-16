const toggleButton = document.getElementById("toggle-btn");
const sideBar = document.getElementById("side-bar");

toggleButton.addEventListener("click", show);
function show() {
  sideBar.classList.toggle("active");
}


const blocs = document.querySelectorAll(".bloc").forEach((blocs) => {
    blocs.addEventListener("mouseover", () => {
      blocs.style.backgroundColor = "#111";
      blocs.style.color = "#fff";
      blocs.style.transition = "1000ms"
    });

    blocs.addEventListener("mouseout", () => {
      blocs.style.backgroundColor = "#fff";
      blocs.style.color = "#111";
    });
  });








