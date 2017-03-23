<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
 <script language = "javascript" >

         document.writeln("<h2></h2>");

         var os = { "WINDOWS" : [ 
            { "Name"  : "MICROSOFT", "OSTYPE" : "WINDOWS XP" ,"tmachine"  : "Laptop" },
       ],  
				
            "MAC"  : [
               { "Name"  : "MAC", "OSTYPE" : "IOS 10", "tmachine"  : "Laptop" },
       ],
            "LINUX"  : [
               { "Name"  : "LINUX", "OSTYPE" : "KALI LINUX", "tmachine"  : "Desktop" },
               ]


         }    

         var i = 0
         document.writeln("<table border = '1'><tr>");
			
         for(i = 0;i<os.WINDOWS.length;i++){	
            document.writeln("<td>");
            document.writeln("<table border = '1' width = 100 >");
            document.writeln("<tr><td><b>Platform</b></td><td width = 50>" + os.WINDOWS[i].Name+"</td></tr>");
            document.writeln("<tr><td><b>OS VERSION</b></td><td width = 50>" + os.WINDOWS[i].OSTYPE +"</td></tr>");
            document.writeln("<tr><td><b>Type of machine</b></td><td width = 50>" + os.WINDOWS[i].tmachine+"</td></tr>");
            document.writeln("</table>");
            document.writeln("</td>");
         }

         for(i = 0;i<os.MAC.length;i++){
            document.writeln("<td>");
            document.writeln("<table border = '1' width = 100 >");
            document.writeln("<tr><td><b>Platform</b></td><td width = 50>" + os.MAC[i].Name+"</td></tr>");
            document.writeln("<tr><td><b>OS VERSION</b></td><td width = 50>" + os.MAC[i].OSTYPE +"</td></tr>");
            document.writeln("<tr><td><b>Type of machine</b></td><td width = 50>" + os.MAC[i].tmachine+"</td></tr>");
            document.writeln("</table>");
            document.writeln("</td>");
         }

          for(i = 0;i<os.LINUX.length;i++){
            document.writeln("<td>");
            document.writeln("<table border = '1' width = 100 >");
            document.writeln("<tr><td><b>Platform</b></td><td width = 50>" + os.LINUX[i].Name+"</td></tr>");
            document.writeln("<tr><td><b>OS VERSION</b></td><td width = 50>" + os.LINUX[i].OSTYPE +"</td></tr>");
            document.writeln("<tr><td><b>Type of machine</b></td><td width = 50>" + os.LINUX[i].tmachine+"</td></tr>");
            document.writeln("</table>");
            document.writeln("</td>");
         }
			
         document.writeln("</tr></table>");

      </script>

<body>

</body>
</html>