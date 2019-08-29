<!-- div class="container" style="background-color:white;opacity:.70;-moz-opacity:.70;filter:alpha(opacity=70);" -->
<div class="container bg-secondary text-white">
<div class="hero-unit">
<h1>Sesat daa</h1>
<p><?php echo $this->mesej; ?></p>
<pre class="text-white"><?php
$url = dpt_url_xfilter();
if( isset($url) )
{
	echo '$url=>'; print_r($url);
}	?></pre>
</div><!-- / class="hero-unit" -->
</div><!-- / class="container" -->