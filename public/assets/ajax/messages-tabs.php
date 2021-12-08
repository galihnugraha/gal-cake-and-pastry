<?php 
	usleep(500000);

	require '../../config/functions.php';

	$keyword = htmlspecialchars($_GET['keyword']);

	$data = cari($keyword);

 ?>

<div class="container" data-aos="fade-up">

	<div class="row" style="border: 1px solid lightgrey; padding-top: 60px; padding-bottom: 60px;">

	  <?php if (count($data) < 1) : ?>
	  <div style="color: red; margin-left: 450px;">
	  	<i>
	  		No found message with subject like (<?= $keyword ?>)
	  	</i>
	  </div>
	  <?php endif ?>

	  <div class="col-lg-3 offset-2">
	    <ul class="nav nav-tabs flex-column">

	    <?php $i = 1; foreach ($data as $messages) : ?>
	      
	      <?php if ($i == 1) : ?>
	        <li class="nav-item">
	          <a class="nav-link uppercase active show" data-toggle="tab" href="#tab-<?= $i ?>">
	            <?= $messages['subject'] ?>
	          </a>
	        </li>

	      <?php else : ?>
	        <li class="nav-item">
	          <a class="nav-link uppercase" data-toggle="tab" href="#tab-<?= $i ?>">
	            <?= $messages['subject'] ?>
	          </a>
	        </li>

	      <?php endif ?>
	    <?php $i++; endforeach; ?>

	    </ul>
	  </div>
	  <div class="col-lg-7 mt-4 mt-lg-0">
	    <div class="tab-content">

	    <?php $j = 1; foreach ($data as $messages) : ?>
	      
	      <?php if ($j == 1) : ?>
	        <div class="tab-pane active show" id="tab-<?= $j ?>">
	          <div class="row">
	            <div class="col-lg-8 details order-2 order-lg-1">
	              <h3 class="capitalize">
	                Subject : <?= $messages['subject'] ?>
	              </h3>
	              <p class="font-italic">
	                From&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?= $messages['name'] ?>&nbsp;&nbsp;&nbsp;(<?= $messages['email']  ?>)
	              </p>
	              <p>
	                Message&nbsp;&nbsp;:&nbsp;&nbsp; &rdquor;<?= $messages['message'] ?>&rdquor;
	              </p>
	            </div>
	          </div>
	          <br>
	          <div class="row text-center">
	            <a href="delete.php?id=<?= $messages['id'] ?>" class="get-started-btn" style="margin-left: 60px;" onclick="return confirm('delete?')">Delete This Message</a>
	          </div>
	        </div>

	      <?php else : ?>
	        <div class="tab-pane" id="tab-<?= $j ?>">
	          <div class="row">
	            <div class="col-lg-8 details order-2 order-lg-1">
	              <h3 class="capitalize">
	                Subject : <?= $messages['subject'] ?>
	              </h3>
	              <p class="font-italic">
	                From&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?= $messages['name'] ?>&nbsp;&nbsp;&nbsp;(<?= $messages['email']  ?>)
	              </p>
	              <p>
	                Message&nbsp;&nbsp;:&nbsp;&nbsp; &rdquor;<?= $messages['message'] ?>&rdquor;
	              </p>
	            </div>
	          </div>
	          <br>
	          <div class="row text-center">
	            <a href="delete.php?id=<?= $messages['id'] ?>" class="get-started-btn" style="margin-left: 60px;" onclick="return confirm('delete?')">Delete This Message</a>
	          </div>
	        </div>

	      <?php endif ?>
	    <?php $j++; endforeach; ?>

	    </div>
	  </div>
	</div>

</div>