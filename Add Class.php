<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>JS Bin</title>
</head>
<body>
	<div>
		 <input type="button" id="more_fields" onclick="add_fields();" value="Add More" />
	</div>
      
  
       <div id="room_fileds">
            <div id="content">
            	<form action="#" method="post">
                <span>Name:<input type="text" style="width:150px;" name="name<?php $i?>" value="" /></span>
                <span>Phone:<input type="text" style="width:150px;" name="phone<?php $i?>" value="" /></span>
            </form>
            </div>
        </div>

<script>
	
function add_fields() {
   var d = document.getElementById("content");
  
   d.innerHTML += "<br /><div><form action='#' method='post'>Name: <input type='text'style='width:150px;'value='' /></span><span>Phone: <input type='text' style='width:150px'  value='' /></form></div style='transition:5s'>";
}

</script>


</body>
</html>