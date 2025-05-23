<footer>

  <div class="container">


    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Wszelkie prawa zastrzeżone.</p>
  </div>
  

</footer>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const menu = document.querySelector('.menu');

    hamburger.addEventListener('click', function() {
      menu.classList.toggle('active');
    });
  });
    document.addEventListener('DOMContentLoaded', function() {
    const hamburgerMenu = document.getElementById('hamburger-menu');
    const mainNav = document.querySelector('.main-nav');

    hamburgerMenu.addEventListener('click', function() {
        hamburgerMenu.classList.toggle('active');
        mainNav.classList.toggle('active');
    });
});
</script>

<?php wp_footer(); ?>
<div class="sugar-flakes" id="sugar-flakes"></div>

<script>
  const flakesContainer = document.getElementById('sugar-flakes');

  function createFlake() {
    const flake = document.createElement('div');
    flake.classList.add('sugar-flake');
    flake.style.left = Math.random() * 100 + 'vw';
    flake.style.animationDuration = 3 + Math.random() * 2 + 's';
    flakesContainer.appendChild(flake);

    setTimeout(() => flake.remove(), 5000);
  }

  setInterval(createFlake, 150);
</script>

</body>
</html>
