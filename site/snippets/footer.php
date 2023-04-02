  <footer>
    <?= $site->copyright() ?>
    <nav>
    <?php if($site->socialMedia()->isNotEmpty()): ?>
      <ul>
        <?php foreach($site->socialMedia()->toStructure() as $social): ?>
          <li>
            <a href="<?php echo $social->url(); ?>" target="_blank" rel="noopener noreferrer">
              <figure>
                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                  <?= svg("assets/icons/" . $social->service() . ".svg") ?>
                </svg>
              </figure>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>
    </nav>
  </footer>
  <?= vite()->js() ?>
</body>
</html>