const colorThemes = document.querySelectorAll('[name="theme"]');

// store theme
const storeTheme = (theme) => {
  localStorage.setItem("theme", theme);
};

// set theme when visitor returns
const setTheme = () => {
  const activeTheme = localStorage.getItem("theme");
  colorThemes.forEach((themeOption) => {
    if (themeOption.id === activeTheme) {
      themeOption.checked = true;
    }
  });
  // fallback for no :has() support
  // document.documentElement.className = activeTheme;
};

colorThemes.forEach((themeOption) => {
  themeOption.addEventListener("click", () => {
    storeTheme(themeOption.id);
  });
});

document.onload = setTheme();