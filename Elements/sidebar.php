<?php require('Elements/header.php'); ?>
<html>
<div class="sidebar">
<ul class="nav nav-sidebar">
    <li>
        <a onclick="loadDoc('Home')" data-toggle="tooltip" title="Home" class="sidebar-item-link active" data-placement="right">
            <span class="glyphicon glyphicon-home glyph-sidebar"></span>
            <span class="sidebar-text">Home</span>
        </a>
    </li>
	<li>
        <a onclick="loadDoc('Profile')" data-toggle="tooltip"title="Profile" class="sidebar-item-link" data-placement="right">
			<span class="glyphicon glyphicon-user glyph-sidebar"></span>
			<span class="sidebar-text">Profile</span>
		</a>
	</li>	
	<li>
        <a onclick="loadDoc('Members')" data-toggle="tooltip"title="Members" class="sidebar-item-link" data-placement="right">
			<span class="glyphicon glyphicon-list-alt glyph-sidebar"></span>
			<span class="sidebar-text">Members</span>
		</a>
	</li>
	<li>
        <a onclick="loadDoc('Following')" data-toggle="tooltip" title="Following" class="sidebar-item-link" data-placement="right">
			<span class="glyphicon glyphicon-heart glyph-sidebar"></span>
			<span class="sidebar-text">Following</span>
		</a>
	</li>
	<li>
        <a onclick="loadDoc('Messages')" data-toggle="tooltip" title="Messages" class="sidebar-item-link" data-placement="right">
			<span class="glyphicon glyphicon-envelope glyph-sidebar"></span>
			<span class="sidebar-text">Messages</span>
		</a>
	</li>
	<li>
        <a onclick="loadDoc('Games')" data-toggle="tooltip" title="Games" class="sidebar-item-link" data-placement="right">
			<span class="glyphicon glyphicon-plus glyph-sidebar"></span>
			<span class="sidebar-text">Games</span>
		</a>
	</li>
	<li>
        <a onclick="loadDoc('Channels')" data-toggle="tooltip" title="Channels" class="sidebar-item-link" data-placement="right">
			<span class="glyphicon glyphicon-facetime-video glyph-sidebar"></span>
			<span class="sidebar-text">Channels</span>
		</a>
	</li>
	<li>
        <a onclick="loadDoc('Videos')" data-toggle="tooltip" title="Videos" class="sidebar-item-link" data-placement="right">
			<span class="glyphicon glyphicon-play-circle glyph-sidebar"></span>
			<span class="sidebar-text">Videos</span>
		</a>
	</li>
	<li>
        <a onclick="loadDoc('Statistics')" data-toggle="tooltip" title="Statistics" class="sidebar-item-link" data-placement="right">
			<span class="glyphicon glyphicon-align-left glyph-sidebar"></span>
			<span class="sidebar-text">Statistics</span>
		</a>
	</li>
	<li>
        <a href="logout.php" data-toggle="tooltip" title="Logout" class="sidebar-item-link" data-placement="right">
			<span class="glyphicon glyphicon-log-out glyph-sidebar"></span>
			<span class="sidebar-text">Logout</span>
		</a>
	</li>
</ul>
</div>
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/app.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- So the Tooltips show on top of the body container -->
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip({container: 'body'});
});
</script>

<!-- Sidebar Button Tab Changes -->


<!-- Active Class when sidebar is clicked -->
<script>
$(function () {
  $('.nav li a').click(function (e) {
    //e.preventDefault(); // For some reason this line prevents the logout button the the sidebar from working
    $('.nav li a').removeClass('active');
    $(this).closest('a').addClass('active');
  });
});
</script>

