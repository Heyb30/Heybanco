var premio = Math.floor(Math.random() * (10000 - 500 + 1)) + 500;
document.getElementById("premio").textContent = premio.toLocaleString('es-MX');