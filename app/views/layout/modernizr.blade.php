<script>
    Modernizr.load([
	{
	    load: '//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js',
	    complete: function () {
	        if ( !window.jQuery ) {
	            Modernizr.load('js/libs/jquery-1.7.1.min.js');
	        }
	    }
	},
	{
	    // This will wait for the fallback to load and
	    // execute if it needs to.
	    load: 'needs-jQuery.js'
	}
    ]);
</script>
