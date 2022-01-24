<!-- Title: Lab 7 Web security
             Author: Alena Denisova
             Date: 2020
             Availablity: https://moodle.city.ac.uk/course/view.php?id=32190 -->
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>