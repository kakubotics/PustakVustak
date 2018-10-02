	<div class="form-inline my-2 my-lg-0">
	      <a href="index.php?logout=<?php echo $logValue; ?>"><button class="btn btn-outline-success my-2 my-sm-0"><?php echo $msg; ?></button></a>
	</div>
  </div>
</nav>

<div style="height: 45px;"></div>
<div style="height:50px;"></div>


<div class="container">

		<div class="alert alert-info alert-dismissible fade show" role="alert">
		  <strong>Welcome!</strong> Upload the details of the book you want to sell.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>

		<div id="error"><?php echo $error; ?></div>

	    <form method="post" enctype="multipart/form-data" >
		  <div class="form-group">
		    <label >Book Title</label>
		    <input type="text" class="form-control" id="bookTitle" name="bookTitle" placeholder="Eg. Engineering Mathematics 1">
		  </div>


		   <div class="custom-control custom-radio custom-control-inline" style="margin-top: 20px;">
			  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="option1">
			  <label class="custom-control-label" for="customRadioInline1">Engineering Books</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="option2">
			  <label class="custom-control-label" for="customRadioInline2">Other books</label>
			</div>
		  
		  <div class="accordion" id="accordionExample" style="margin-top: 20px;">
			  <div class="card">
			    <div class="card-header" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          Engineering Books
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			      <div class="card-body">
			        <div class="form-group" id="selectSemester">
					    <label for="exampleFormControlSelect1">Semester</label>
					    <select class="form-control" name="bookSemester">
					      <option disabled='' selected='' value=''>Select Semester</option>
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					      <option>4</option>
					      <option>5</option>
					      <option>6</option>
					      <option>7</option>
					      <option>8</option>
					    </select>
					    <label for="exampleFormControlSelect1">Select (book belongs to which course)</label>
					    <select class="form-control" name="bookBranch">
					      <option disabled='' selected='' value=''>Book(course)</option>
					      <option>BASIC SCIENCE</option>
					      <option>CSE</option>
					      <option>IS</option>
					      <option>ECE</option>
					      <option>EEE</option>
					      <option>CIVIL</option>
					      <option>MECHANICAL</option>
					    </select>
					  </div>
			      </div>
			    </div>
			  </div>
			  <!-- <?php //print_r($_POST); ?>
			  <?php //print_r($_SESSION); ?> -->
			  <div class="card">
			    <div class="card-header" id="headingTwo">
			      <h5 class="mb-0">
			        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			          Other books
			        </button>
			      </h5>
			    </div>
			    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
			      <div class="card-body">
			          <div class="form-group">
					    <label for="exampleFormControlSelect1">Book type</label>
					    <select class="form-control" id="selectBookType" name="bookType">
					      <option disabled='' selected='' value=''>Select Book type</option>
					      <option>Novel</option>
					      <option>Refrence Book</option>
					      <!-- <option disabled='' selected='' value=''>Ebook</option> -->
					    </select>
					  </div>
			      </div>
			    </div>
			  </div>
			</div>		

		  <div class="form-group" style="margin-top: 20px;">
		    <label for="imageselect"><strong>Upload an image of your book ( jpg | png )</strong></label>
		    <input type="hidden" name="size" value="1000000" />
		    <input type="file" class="form-control" id="customFile" name="bookImage">
		  </div>
		  <div class="form-group" style="margin-top: 20px;">
		    <label for="exampleFormControlTextarea1">Some description about book</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bookDescription"></textarea>
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleInputNumber">Mobile number</label>
		    <input type="tel" class="form-control" id="exampleInputNumber"  placeholder="Enter your mobile number" name="mobileNumber">
		  </div>

		  <div class="form-group">
		  	<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text">₹</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Amount at you want to sell your book" name="bookAmount">
			  <div class="input-group-append">
			    <span class="input-group-text">.00</span>
			  </div>
			</div>
		  </div>

		  <div class="form-group">
			  <input type="hidden" name="submitAdd" value="1">	
			  <input type="submit" name="submit" value="Submit" class="btn btn-success">
		  </div>
		</form>
	</div>