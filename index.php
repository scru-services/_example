<?php

		// include the domain information from the root dir
		require '../../inc/browscap.php';
		require '../../inc/domain.php';
		require '../../inc/projects.php';

		// include the project_data from the project dir
		// check this data if you setup a new project
		require 'inc/project_data.php';

		// include the header from the root dir
		require '../../inc/header.php';

?>

	<!-- scru-service start -->

	<div class="result-container">

		<h4>Service</h4>

		<div class="result" contenteditable="true" onclick="document.execCommand('selectAll',false,null)">result</div>

	</div>

	<!-- scru-service end -->

<?php

	// include the domain information from the root dir
	require '../../inc/footer.php';

?>
