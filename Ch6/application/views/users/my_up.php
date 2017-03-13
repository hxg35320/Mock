<h2><?php echo $page_heading ; ?></h2>
<body>

		<br> <a href="http://localhost/ch6/index.php/me/edit_val" class="btn btn-info" role="button">Edit Profile</a>
		 <a href="http://localhost/ch6/index.php/me/me_ud" class="btn btn-info" role="button">User Details</a>
		 <a href="http://localhost/ch6/index.php/register" class="btn btn-info" role="button">Register Now</a></br>
		 
		
		
<table class="table table-bordered">
    <thead>
        <tr>
		
          <th>My Profile </th>
                            
        </tr>
    </thead>	
    <tbody>
	Profile Picture :
	
	
    	<?php if ($query->num_rows() > 0) : ?>
			<?php foreach ($query->result() as $row) : ?>
			<p> <b> Hello ,<?php echo   $row->usr_fname ;?></b></p>
		        <tr>
		          <td>
				   
				  User Name :<?php echo $row->usr_uname ; ?> </br>
		          FULL NAME :<?php echo $row->usr_fname ; ?>
		          <?php echo $row->usr_lname ; ?>
		          </br>Email Id : <?php echo $row->usr_email ; ?></td>
		          
		        </tr>	        
		    <?php endforeach ; ?>
		<?php else : ?>
	        <tr>
	          <td colspan="5" class="info">No users here!</td>
	        </tr>			
		<?php endif; ?>
		
		
	</tbody>
</table>
<a href = "http://localhost/ch6/index.php/me/me_ud">User Details Table</a>
		<a href = "http://localhost/ch6/index.php/me/edit_val">Edit My Details </a>
		</body>
