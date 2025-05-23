// script.js
let percent = 0;
const loadBar   = document.getElementById("loadBar");
const loadValue = document.getElementById("loadValue");

function loadProgress() {
  if (percent > 100) return;
  loadBar.style.width = percent + "%";
  loadBar.setAttribute("aria-valuenow", percent);
  loadValue.textContent = percent;
  percent++;
}

setInterval(loadProgress, 150); // ~10 secondes pour atteindre 100%
