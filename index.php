<?php include 'header.php'; ?>
  <h1>HOME</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <div class="container-fluid">
    <h2>Server and File Info</h2>
    <?php if($server): ?>
      <ul class="list-group">
        <?php foreach($server as $key => $value): ?>
          <li class="list-group-item">
            <strong><?php echo $key; ?>:</strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <h2>Client Info</h2>
    <?php if($server): ?>
      <ul class="list-group">
        <?php foreach($client as $key => $value): ?>
          <li class="list-group-item">
            <strong><?php echo $key; ?>:</strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
<?php include 'footer.php'; ?>
