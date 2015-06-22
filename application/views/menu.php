<?php echo $menu; ?>
<br/>
<?php echo $menu_bottom; ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#news').load('<?php echo base_url(); ?>home/news_load').effect("fade").fadeIn("slow");
}, 10000); // refresh every 10000 milliseconds
</script>
<div id="news"></div>
