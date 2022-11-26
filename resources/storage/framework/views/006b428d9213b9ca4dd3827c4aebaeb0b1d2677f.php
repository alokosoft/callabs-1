<link href="<?php echo e(asset('css/searchbar.css')); ?>" type="text/css" rel="stylesheet" media="all">

<center>
<div id='search-box' itemprop='mainEntity' itemscope='itemscope' itemtype='https://schema.org/WebSite'>
<form action='/search' id='search-fs' itemprop='potentialAction' itemscope='itemscope' itemtype='https://schema.org/SearchAction' method='get' query-input='required'>
<i aria-hidden='true' class='fa fa-search'></i>
<input id='search-text' itemprop='query-input' name='q' placeholder='Search Test' required='' type='text' value=''/>
<input name='max-results' type='hidden' value='9'/>
<button type='submit'>Search</button></form></div>

</center>
<?php /**PATH C:\xampp\htdocs\callabs\resources\views/layouts/searchbar.blade.php ENDPATH**/ ?>