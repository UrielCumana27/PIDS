// Botón de accesibilidad
    document.getElementById('toggleA11y')?.addEventListener('click', function(){
      const on = document.body.classList.toggle('pids-a11y-on');
      this.setAttribute('aria-pressed', on ? 'true' : 'false');
    });