<!DOCTYPE html>
<html>
<head>
	<title>Semester</title>
	
</head>
<body>

<?php
  $sub =  array(
			array("subjectcode" => "IT-341", "subjectname" => "WebApp Development", "catalog" => 213213, "Grade" => "A+"),
			array("subjectcode" => "IT-211", "subjectname" => "CISCO Networking", "catalog" => 213213, "Grade" => "A+"),
			array("subjectcode" => "CS-342", "subjectname" => "Principles of OS", "catalog" => 45646, "Grade" => "A+"),
			array("subjectcode" => "CS-351", "subjectname" => "DATABASEMANAGEMANTSYSTEM", "catalog" => 458684, "Grade" => "A+"),
			array("subjectcode" => "NSCI-111", "subjectname" => "PHYSICS 1", "catalog" => 84684, "Grade" => "A+"),
			array("subjectcode" => "ACTG-100", "subjectname" => "ACCOUNTING ", "catalog" => 546546, "Grade" => "A+"),
			array("subjectcode" => "HUMA-101", "subjectname" => "Philosopy of Man", "catalog" => 45654, "Grade" => "A+"),
			array("subjectcode" => "PHYED-4", "subjectname" => "PE 4", "catalog" => 45654, "Grade" => "A+"),
			);
?>


<script >
		var sub = JSON.parse('<?php echo json_encode($sub); ?>')
		sub.push({"subjectcode": "ETHNS-101", "subjectname" :  "Euthenics" , "catalog" : 6596 , "Grade" : "A+"});
		sub.push({"subjectcode": "IT-101", "subjectname" : "Multimedia" , "catalog" : 56456 , "Grade" : "A+"});
		sub.push({"subjectcode": "MATH -202", "subjectname" : "Trigonometry" , "catalog" : 6596 , "Grade" : "A+"});
		document.writeln("<table border='2'><tr>");
		for(i=0;i<sub.length;i++){
document.writeln("<td>");
document.writeln("<table border='1' width=100 >");
document.writeln("<tr><td><b>Subject Code</b></td><td width=50>"+ sub[i].subjectcode+"</td></tr>");
document.writeln("<tr><td><b>Subject Name</b></td><td width=50>"+ sub[i].subjectname +"</td></tr>");
document.writeln("<tr><td><b>Catalog #</b></td><td width=50>"+ sub[i].catalog +"</td></tr>");
document.writeln("<tr><td><b>Grade</b></td><td width=50>"+ sub[i].Grade +"</td></tr>");
document.writeln("</table>");
document.writeln("</td>");
}
document.writeln("</tr></table>");


	</script>
</body>
</html>
