﻿<!DOCTYPE html>
<html lang="is">
  
  
    <!-- Header -->
    <?php include 'header.php';?>
	<?php include 'menu.php';?>

	<?php        
	$images = [           
 				['file'    => 'm2a',             'caption' => 'Happy with A Thing'],          
				['file'    => 'm1a',             'caption' => 'Life is better with A Thing'],
        		['file'    => 'm3a',             'caption' => 'More Things more happiness'],     
        		['file'    => 'm6a',             'caption' => 'A Thing of beauty is joy forever'],     
        		['file'    => 'm5a',             'caption' => 'A joy forever'],     
        	  ];       
			$images.shuffle();
			$selectedImage1 = "images/{$images[0]['file']}.jpg";      
  			$caption1 = $images[0]['caption'];
			$selectedImage2 = "images/{$images[1]['file']}.jpg";      
  			$caption2 = $images[1]['caption']; ?>

    <section>
        <h2>A Thing for you</h2>
        <p>A Thing has been very popular for three years now. It entered the market in 2013 and was immediately popular. A Thing is manifactured by The Thing Company, a company that specializes in making life easier for modern people.</p> 
        <figure>        
      		<img src="<?= $selectedImage0; ?>" alt="Random image">           
   				<figcaption><?= $caption0; ?></figcaption>    
      		</figure>
		<figure>        
      		<img src="<?= $selectedImage1; ?>" alt="Random image">           
   				<figcaption><?= $caption1; ?></figcaption>    
      	</figure>

	
<p>A Thing has been described as the most usefull item since the ballpoint pen. Customers are universially happy with A Thing, buying more and more Things for teheir friends, family and fellow workers. Try it out - you will be amazed!</p> 
        <p>A Thing is cheap enough for everyone and so the life millions of people can be improved. Make your life better and get A Thing to day. Buy A Thing today and join a evergrowing community of Thing-user. This close-knit community has been described by members as a second family where people find true support, comfort and warmth. Don´t leave it for an another day. Buy A Thing and join a ever growing community!</p>
 		
        <p>A Thing has given rise to new usage of the word thing in english. You can read about it <a href="http://www.urbandictionary.com/define.php?term=A%20Thing">here</a> 
        and also  <a href="http://opinionator.blogs.nytimes.com/2016/04/16/is-that-even-a-thing/?_r=0">here</a>. We are extreme proud that your product has changed the English language and hope that in the future A Thing enter more languages such as Japanesese and Chineese</p>

   </section>
    <section>
  	
        <nav class="nedri">
	<input type="checkbox" id="toggle2">
	<label for="toggle2">Menu&#9776; </label> 
	   <ul>
		<li><a href="#">&nbsp;</a></li>
            	<li><a href="index.html">Home</a></li> 
            	<li><a href="test.html">Testimonials</a></li>
            	<li><a href="order.html">Order</a></li>
            	<li><a href="contact.html">Contact</a></li>
		<li><a href="#">&nbsp;</a></li>
	   </ul>
        </nav>
    </section>
   <?php include 'footer.php';?>
  </body>
</html>