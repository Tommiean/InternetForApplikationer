<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="ingredients">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="http://mittkok.expressen.se/wp-content/uploads/2013/12/kttbullar-recept-700x700.jpg" class="w3-round w3-image w3-opacity-min" alt="Meatballs" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      
     	<div class="w3-tag w3-light-grey">
      	<ul>
	      	<li><h3>Ingredients</h3></li>
	      	<li><h4>5 portions</h4></li>
	      	<li><h5>1 pound lean ground beef</h5></li>
	      	<li><h5>2 cloves garlic, chopped</h5></li>
	      	<li><h5>2 tablespoons diced onion</h5></li>
	      	<li><h5>1 egg</h5></li>
	      	<li><h5>½ teaspoon salt</h5></li>
	      	<li><h5>½ teaspoon ground black pepper</h5></li>
	      	<li><h5>2 tablespoons bread or cracker crumbs</h5></li>
	      	<li><h5>2 tablespoons chopped fresh parsley (optional)</h5></li>
	      	<li><h5>olive oil</h5></li>
		</ul>
    	</div>
    </div>
  	</div>

   	<div>
    <h1>Instructions</h1><br>
    	<ol>
    	<li><h6>Mix together all ingredients for the meatballs. Set aside.</h6></li>
    	<li><h6>Using a tablespoon scoop or spoon, form meatballs from the ground beef mixture. Heat 12-inch skillet or saute pan over medium heat. Drizzle in enough olive oil to lightly coat the bottom of the skillet to prevent meatballs from sticking. Drop formed meatballs into the heated skillet, turning occasionally to ensure that all sides of the meatball have been browned, about 7-10 minutes. Remove the meatballs from the skillet or saute pan and drain on a plate lined with paper towels.</h6></li>
    </ol>
	</div>
</div>
</div>
<br>

<<div class="comments">
    <?php if($this->session->userdata('logged_in')) : ?>
    <?php echo validation_errors(); ?>
    <?php echo form_open('comments/create'); ?>
    <?php echo 'Commenting as: '.$this->session->userdata('username'); ?>
    <textarea class="commentingbox" name="body"></textarea>
    <input type="hidden" name="page" value="meatballs";>
    <button type="submit" class="commentbutton">Comment</button>
    <?php echo form_close(); ?>
     <?php endif; ?>
    <h2>Comments:</h2>
    <?php foreach($comments as $comment):
         if($comment['page'] == 'meatballs'){?>
    <div class="comment">
        <?php if($this->session->userdata('username') == $comment['username']) : ?>
        <?php echo form_open('comments/delete/'.$comment['id']); ?>
        <button type="submit" value="Delete" class="deletebutton">Delete</button>
        <input type="hidden" name="page" value="meatballs";>
        <?php echo form_close(); ?>
        <?php endif; ?>
        <h3 class="commentusername"><?php echo $comment['username']; ?></h3>
        <p><?php echo $comment['comment']; ?></p>
    </div>
    <?php } endforeach; ?>

</div>