// Actualizar año en el footer
document.addEventListener("DOMContentLoaded", () => {
    const yearSpan = document.getElementById('copyYear');
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    // Botón de accesibilidad A+
    const btn = document.getElementById('btnA11y');
    if (btn) {
        btn.addEventListener('click', () => {
            document.body.classList.toggle('pids-a11y-on');
        });
    }
});

