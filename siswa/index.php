
<div class="container">
	<?php 
		if (isset($_GET['page'])) {
			if ($_GET['page'] == 'kritik') {
				include 'content/form_kritik.php';
			} 
		} else {
			include 'content/artikel.php';
		}
	 ?>
</div>

<?php 
	if (isset($_POST['logout'])) {
		header('Location: logout.php');
	}
 ?>