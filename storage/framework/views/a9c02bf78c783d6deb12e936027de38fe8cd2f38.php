<link href="<?php echo e(asset('css/searchbar.css')); ?>" type="text/css" rel="stylesheet" media="all">

<center>
<div id='search-box' itemprop='mainEntity' itemscope='itemscope' >

<form action="<?php echo e(route('search-test')); ?>" id='search-fs' itemprop='potentialAction' itemscope='itemscope'  method='post' query-input='required'>
<?php echo csrf_field(); ?>

<i aria-hidden='true' class='fa fa-search'></i>

<input id='search-text'  class="typeahead" type="text"   autocomplete="off" placeholder='Search Test (Like Vitamin Profile, Blood Test,etc...)' 
value="" data-provide="typeahead" />

<input name='max-results' type='hidden' id='max-results'/>

<button type='submit'>Search</button>
</form>
</div>

</center>
<?php /**PATH C:\xampp\htdocs\callabs\resources\views/layouts/components/searchbar.blade.php ENDPATH**/ ?>