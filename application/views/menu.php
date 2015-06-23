<?php echo $menu; ?>
<br/>
<?php echo $menu_bottom; ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var lastpost = '//localhost/front-sn/home/news_load/';
var idhtml = '#news';
</script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$(idhtml).load(lastpost).fadeIn("slow");
}, 10000); // refresh every 10000 milliseconds
</script>
<div id="news"></div>
