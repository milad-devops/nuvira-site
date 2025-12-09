// Updated main.js — extra SVG animations and responsiveness tweaks
(function(){
  document.addEventListener('DOMContentLoaded', function(){
    var mobileToggle = document.getElementById('mobileToggle');
    var mainNav = document.querySelector('.main-nav');
    if (mobileToggle) {
      mobileToggle.addEventListener('click', function(){
        var expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', (!expanded).toString());
        mainNav.classList.toggle('open');
      });
    }

    // Mount progress bars
    var bars = document.querySelectorAll('.progress-bar');
    bars.forEach(function(b){
      var val = parseInt(b.getAttribute('data-value') || '60', 10);
      setTimeout(function(){ b.style.width = val + '%'; }, 260);
    });

    // Simple reveal on scroll (lightweight)
    var revealables = document.querySelectorAll('.card-3d, .glass, .project-card, .post-card, .avatar-3d, .graphic-pill');
    function reveal(){
      var top = window.innerHeight;
      revealables.forEach(function(el){
        var r = el.getBoundingClientRect();
        if (r.top < top - 40) {
          el.style.opacity = 1;
          el.style.transform = 'translateY(0)';
        }
      });
    }
    revealables.forEach(function(el){ el.style.opacity = 0; el.style.transform = 'translateY(14px)'; el.style.transition = 'all .66s cubic-bezier(.2,.9,.2,1)'; });
    window.addEventListener('scroll', reveal);
    reveal();

    // 3D tilt for cards
    var tilts = document.querySelectorAll('.card-3d');
    tilts.forEach(function(card){
      card.addEventListener('mousemove', function(e){
        var rect = card.getBoundingClientRect();
        var x = e.clientX - rect.left;
        var y = e.clientY - rect.top;
        var cx = rect.width/2, cy = rect.height/2;
        var dx = (x - cx)/cx;
        var dy = (y - cy)/cy;
        card.style.transform = 'perspective(900px) rotateX(' + (-dy*5) + 'deg) rotateY(' + (dx*5) + 'deg) translateZ(0)';
      });
      card.addEventListener('mouseleave', function(){ card.style.transform = ''; });
    });

    // Animate server icons / pulsing nodes
    var pulses = document.querySelectorAll('.pulse');
    pulses.forEach(function(p){
      p.animate([{opacity:0.6, transform:'scale(0.95)'},{opacity:1, transform:'scale(1.05)'},{opacity:0.6, transform:'scale(0.95)'}], {
        duration: 3200 + Math.random()*1800,
        iterations: Infinity,
        easing: 'ease-in-out'
      });
    });

    // Trigger small svg stroke offset reflow (for CSS animations to start)
    document.querySelectorAll('.network-line').forEach(function(path){ path.getBoundingClientRect(); });

  });
})();
