
$(document).ready(function(){
    jQuery('#camera_wrap').camera({
        loader: false,
        pagination: false ,
        thumbnails: false,
        height: '48.82978723404255%',
        caption: false,
        navigation: true,
        fx: 'mosaic'
    });

});


$(document).ready(function(){
    $().UItoTop({ easingType: 'easeOutQuart' });
});


$(function() {

    var $container  = $('#ib-container'),
        $articles = $container.children('article'),
        timeout;

    $articles.on( 'mouseenter', function( event ) {

        var $article  = $(this);
        clearTimeout( timeout );
        timeout = setTimeout( function() {

            if( $article.hasClass('active') ) return false;

            $articles.not( $article.removeClass('blur').addClass('active') )
                .removeClass('active')
                .addClass('blur');

        }, 65 );

    });

    $container.on( 'mouseleave', function( event ) {

        clearTimeout( timeout );
        $articles.removeClass('active blur');

    });

});
