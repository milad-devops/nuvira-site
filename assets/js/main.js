// Simple animations: mobile menu toggle, progress bar mounts, small reveal on scroll, 3D tilt
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
      setTimeout(function(){ b.style.width = val + '%'; }, 200);
    });

    // Simple reveal on scroll (lightweight)
    var revealables = document.querySelectorAll('.card-3d, .glass, .project-card, .post-card, .avatar-3d');
    function reveal(){
      var top = window.innerHeight;
      revealables.forEach(function(el){
        var r = el.getBoundingClientRect();
        if (r.top < top - 40) el.style.opacity = 1, el.style.transform = 'translateY(0)';
      });
    }
    // init styling
    revealables.forEach(function(el){ el.style.opacity = 0; el.style.transform = 'translateY(10px)'; el.style.transition = 'all .6s cubic-bezier(.2,.9,.2,1)'; });
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
        card.style.transform = 'perspective(900px) rotateX(' + (-dy*6) + 'deg) rotateY(' + (dx*6) + 'deg) translateZ(0)';
      });
      card.addEventListener('mouseleave', function(){ card.style.transform = ''; });
    });

    // Minimal svg animation: add stroke dash offsets are handled by CSS keyframes
  });
})();
