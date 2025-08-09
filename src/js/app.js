const mobileMenu = document.querySelector(".mobile-menu");
const sidebar = document.querySelector(".sidebar");
const contenido = document.querySelector(".contenido");
const logo = document.querySelector(".logo_dsi");

document.addEventListener("DOMContentLoaded", () => {
  darkMode();
  const opens = document.querySelectorAll(".menu-link");

  opens.forEach((open) => {
    open.addEventListener("click", () => {
      const padre = open.parentNode; //<li></li>
      const submenu = padre.children[padre.children.length - 1]; // Submenú asociado
      const flecha = open.lastChild;

      if (submenu.style.display === "flex") {
        submenu.style.display = "none";
        flecha.classList.remove("bi-chevron-down");
        flecha.classList.add("bi-chevron-right"); // Cambiar el texto del botón
      } else {
        submenu.style.display = "flex";
        flecha.classList.remove("bi-chevron-right"); // Cambiar el texto del botón
        flecha.classList.add("bi-chevron-down");
      }
    });
  });
});

mobileMenu.addEventListener("click", () => {
  const spanTitulos = document.querySelectorAll(".titulo");
  // console.log(spanTitulos);

  if (sidebar.style.display == "flex") {
    sidebar.style.display = "none";
    contenido.style.width = "100vw";
  } else {
    sidebar.style.display = "flex";
    contenido.style.width = "calc(100vw - 22rem)";
  }

  if (logo.classList.contains("icono-original")) {
    logo.classList.remove("icono-original");
    logo.classList.add("icono-cambiado");
  } else {
    logo.classList.remove("icono-cambiado");
    logo.classList.add("icono-original");
  }
});

function darkMode() {
  const prefiereDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

  if (prefiereDarkMode.matches) {
    document.body.classList.add("dark-mode");
  } else {
    document.body.classList.remove("dark-mode");
  }
  prefiereDarkMode.addEventListener("change", function () {
    if (prefiereDarkMode.matches) {
      document.body.classList.add("dark-mode");
    } else {
      document.body.classList.remove("dark-mode");
    }
  });

  const botonDarkMode = document.querySelector(".dark-mode-boton");

  botonDarkMode.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
    sidebar.classList.toggle("dark-mode");
    if (sidebar.classList.contains("dark-mode")) {
      botonDarkMode.setAttribute("src", "/build/img/sun-29.svg");
    } else {
      botonDarkMode.setAttribute("src", "/build/img/dark-mode.svg");
    }
  });
}

function editar(fila) {
  document.getElementById("modalEditar").style.display = "block";
  const variables = {};

  for (const propiedad in campos) {
    if (campos.hasOwnProperty(propiedad)) {
      // Crear una variable con el nombre de la propiedad y su valorconsole.log(campos[propiedad]);
      variables[campos[propiedad]] = fila.dataset[campos[propiedad]];
    }
  }
  campos.forEach((campo) => {
    const campoModal = document.getElementById(campo);
    campoModal.value = variables[campo];
  });
}

function cerrarModal() {
  document.getElementById("modalEditar").style.display = "none";
}

document.addEventListener("keydown", function (event) {
  if (event.key === "Escape" || KeyboardEvent.keyCode === 27) {
    // Aquí va la lógica para cerrar tu modal,
    // por ejemplo:
    document.getElementById("modalEditar").style.display = "none"; //Oculta el modal
  }
});
