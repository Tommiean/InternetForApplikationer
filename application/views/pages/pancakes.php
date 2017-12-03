<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="ingredients">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="http://images.media-allrecipes.com/userphotos/720x405/3500474.jpg" class="w3-round w3-image w3-opacity-min" alt="Pancakess" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      
     	<div class="w3-tag w3-light-grey"> 
      	<ul>
	      	<li><h3>Ingredients</h3></li>
	      	<li><h4>4 portions</h4></li>
	      	<li><h5>4 eggs</h5></li>
	      	<li><h5>2 cups milk</h5></li>
	      	<li><h5>1/2 cup all-purpose flour</h5></li>
	      	<li><h5>1 tablespoon sugar</h5></li>
	      	<li><h5>1 pinch salt</h5></li>
	      	<li><h5>2 tablespoons melted butter</h5></li>
		  </ul>
    	</div>
    </div>
  </div>

  <div>
  <h1>Instructions</h1><br>
    	<ol>
    	<li><h6>In a large bowl, beat eggs with a wire whisk. Mix in milk, flour, sugar, salt, and melted butter.</h6></li>
    	<li><h6>Preheat a non-stick electric skillet to medium heat. Pour a thin layer of batter on skillet, and spread to edges. Cook until top surface appears dry. Cut into 2 or 4 sections, and flip with a spatula. Cook for another 2 minutes, or until golden brown. Roll each pancake up, and serve.</h6></li>
    </ol>
	</div>
</div>

<br>
<div class="comments-container">
    <h2>Comments</h2>
    <?php foreach($comments as $comment):
    if($comment['page'] == 'recipes/pancakess.php'){?>
    <div class="comment">
        <p id="comment"><?php echo $comment['comment']; ?></p>
        <div class="posted"><p>Posted by <?php echo $comment['username']; ?> on <?php echo $comment['time']; ?></p></div>
    </div>
    <?php } endforeach; ?>
</div>

<div class="comment">
    <?php if($this->session->userdata('logged_in')) : ?>
    <?php echo validation_errors(); ?>
    <?php echo form_open('comments/create'); ?>
    <?php echo 'Commenting as: '.$this->session->userdata('username'); ?>
    <textarea class="commentingbox" name="body"></textarea>
    <input type="hidden" name="page" value="pancakes";>
    <button type="commentsubmit" class="commentbutton">Submit</button>
    <?php echo form_close(); ?>
     <?php endif; ?>
    <h2>Comments:</h2>
    <?php foreach($comments as $comment):
         if($comment['page'] == 'pancakes'){?>
    <div class="comment">
        <?php if($this->session->userdata('username') == $comment['username']) : ?>
        <?php echo form_open('comments/delete/'.$comment['id']); ?>
        <button type="submit" value="Delete" class="deletecomment">Delete</button>
        <input type="hidden" name="page" value="pancakes";>
        <?php echo form_close(); ?>
        <?php endif; ?>
        <h3 class="commentusername"><?php echo $comment['username']; ?></h3>
        <p><?php echo $comment['comment']; ?></p>
    </div>
    <?php } endforeach; ?>

</div>
