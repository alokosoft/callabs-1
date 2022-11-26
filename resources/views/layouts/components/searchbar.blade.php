<link href="{{ asset('css/searchbar.css') }}" type="text/css" rel="stylesheet" media="all">

<center>
<div id='search-box' itemprop='mainEntity' itemscope='itemscope' >

<form action="{{route('search-test')}}" id='search-fs' itemprop='potentialAction' itemscope='itemscope'  method='post' query-input='required'>
@csrf

<i aria-hidden='true' class='fa fa-search'></i>

<input id='search-text'  class="typeahead" type="text"   autocomplete="off" placeholder='Search Test (Like Vitamin Profile, Blood Test,etc...)' 
value="" data-provide="typeahead" />

<input name='max-results' type='hidden' id='max-results'/>

<button type='submit'>Search</button>
</form>
</div>

</center>
