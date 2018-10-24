<!-- Begin page content -->
    <main role="main" class="container">
  	
      <?php 

      	include_once 'classes/mainclasses.php';

      	$users = new viewUser();
      	$users->showAllUsers();

	?>
  	

      	

    </main>