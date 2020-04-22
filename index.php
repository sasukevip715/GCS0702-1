<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My jQuery Mobile Lab 4</title>

 <meta charset="UTF-8">
  <title>My jQuery Mobile</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
	<body>
	<div data-role="page" id="home" >
		<div data-role="header">
			<p> home page header</p>
		</div>
		<div data-role="main">
			<p>Home main content</p>
			
			<ul id="myfruitlist" data-role="listview">
				<li><a href="#">List item 1</a></li>
				<li><a href="#">List item 2</a></li>
				<li><a href="#">List item 3</a></li>
			</ul>
			
			<a id="btnAddApple" href="" class="ui-btn ui-btn-b ui-corner-all ui-btn-icon-left ui-icon-plus">Add an Apple</a>
    <button id="btnAddOrange">Add an Orange</button>
		</div>
			<div data-role="footer" data-position="fixed">
			<p>Home footer</p>
			<div data-role="navbar">
				<ul>
					<li><a href="#page1" class="ui-btn">Page 1</a></li>
					<li><a href="#page2" class="ui-btn">Page 2</a></li>
				</ul>
			</div>
			</div>
	</div>
	
	<div data-role="page" id="page1">
		<div data-role="header">
			<p> Page 1 header</p>
		</div>
		<div data-role="main">
			<p>Page main 1 content</p>
		</div>
		<div data-role="footer" data-position="fixed">
			<p>Page 1 footer</p>
			<a href="#home" class="ui-btn">Back to home</a>
		</div>
	</div>
		
	<div data-role="page" id="page2">
		<div data-role="header">
			<p> Page 2 header</p>
		</div>
		<div data-role="main">
			<p>Page main 2 content</p>
		</div>
		<div data-role="footer" data-position="fixed">
			<p>Page 2 footer</p>
			<a href="#home" class="ui-btn">Back to home</a>
		</div>
	</div>
		<script>
		 $(document).ready(function(){
        $("#btnAddApple").click(function(){
            $("#myfruitlist").append('<li><a href="#">An Apple</a></li>');
            $("#myfruitlist").listview("refresh");
            $(".view").click(function(){
                alert("View Detail is clicked");
            });

        });

        $("#btnAddOrange").click(function(){
            $("#myfruitlist").append('<li><a href="#">An Orange</a></li>');
            $("#myfruitlist").listview("refresh");
        });
    });
		</script>
</body>
</html>
