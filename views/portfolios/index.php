<?php 

  var_dump($portfolios);

 ?>

<h1>Portfolios Page</h1>

<?php foreach ($portfolios as $portfolio): ?>
    <li><?php echo $portfolio['title']; ?></li>
<?php endforeach; ?>