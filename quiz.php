<?php
    $path ="./";
	$page = "Quiz | Unix 101";
	include($path . "assets/includes/header.php");
?>

    <h1 id="question_num"></h1>
    <h2 id="question"></h2>
    <div id="quiz"></div>
    <p id="question"></p>
    <button id="previous" style="display:none;">Back</button>
    <button id="submit">Submit</button>
    <button id="next" style="display:none;">Next</button>
    <button id="redo" style="display:none;" onClick="window.location.reload();">Try Again</button>
    <div id="results"></div>

<?php
	include($path . "assets/includes/footer.php");
?>  