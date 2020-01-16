<html>
	<head>
		<link rel="stylesheet" type="text/css" href="howtoincode.css" />
	</head>
	<body>
		<div class = "header">how-to_inCode$ <textarea class="searchbox" rows="1"></textarea></div>
		<div class = "main">
			<div class = "question">
			<?php 
				include 'dblogin.php';
				
				$question_id = -1;
				$result = mysql_query("SELECT question_id, question, asker FROM questions");
				
				while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
					$question_id = $row['question_id'];
					print $row['question'];
				}
 			?> 
			</div>
			<div class = "answers">
			<?php 
				$result = mysql_query("SELECT answer, answerer FROM answers WHERE question_id = $question_id");
				
				while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
					print $row['answer'];
				}
 			?> 
			</div>
		</div>
 	</body>
</html>