<style>
   
</style>

<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
				<?php echo "Welcome Back ".($_SESSION['login_type'] == 3 ? "".$_SESSION['login_name'].'!': $_SESSION['login_name'])."!"  ?>
				<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>

    </head>
    <body>
       
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->

                   
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
<br>
<br>
<br>
<br>
            
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                           <h1>Contact Us</h1><!--body content title-->
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
			
            
        </div><!--body content div-->
        
    </body>



					
				</div>
				<hr>
				<div class="row">
				
				</div>
			</div>
			
		</div>
		</div>
	</div>

</div>
<script>
	
</script>