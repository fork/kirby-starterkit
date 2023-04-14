<?php if(isset($slot)): ?>
<div class="richtext <?= $class ?? ''?>">
  <?= $slot ?>
</div>
<?php endif; ?>