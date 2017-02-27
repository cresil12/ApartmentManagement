<aside>
	<div id="sidebar">
		<ul>
			<li><a href="#">link1</a></li>
			<li><a href="#">link2</a></li>
			<li><a href="#">link3</a></li>
			<li><a href="#">link4</a></li>
			<li><a href="#">link5</a></li>
			<li><a href="#">link6</a></li>
		</ul>
	</div>

	<div id="sidebar-btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
</aside>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#sidebar-btn').click(function() {
				$('#sidebar').addClass('visible');
			});
		});
	</script>