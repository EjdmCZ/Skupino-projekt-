function toggleMode() {
  var body = document.body;
  body.classList.toggle("dark-mode");
  body.classList.toggle("light-mode");

  // Uložení režimu do session storage
  if (body.classList.contains("dark-mode")) {
    sessionStorage.setItem("mode", "dark");
    document.getElementById("mode-toggle").src = "../pictures/sun.png";
  } else {
    sessionStorage.setItem("mode", "light");
    document.getElementById("mode-toggle").src = "../pictures/moon.png";
  }
}

// Načtení režimu z session storage při načtení stránky
window.onload = function () {
  var mode = sessionStorage.getItem("mode");

  if (mode === "dark") {
    document.body.classList.add("dark-mode");
    document.getElementById("mode-toggle").src = "../pictures/sun.png";
  } else {
    document.body.classList.remove("dark-mode");
    document.getElementById("mode-toggle").src = "../pictures/moon.png";
  }
  var darkModeMediaQuery = window.matchMedia("(prefers-color-scheme: dark)");

  function handleColorSchemeChange(e) {
    var body = document.body;
    if (e.matches) {
      body.classList.add("dark-mode");
      body.classList.remove("light-mode");
      sessionStorage.setItem("mode", "dark");
      document.getElementById("mode-toggle").src = "../pictures/sun.png";
    } else {
      body.classList.remove("dark-mode");
      body.classList.add("light-mode");
      sessionStorage.setItem("mode", "light");
      document.getElementById("mode-toggle").src = "../pictures/moon.png";
    }
  }

  darkModeMediaQuery.addListener(handleColorSchemeChange);
  handleColorSchemeChange(darkModeMediaQuery);
};
