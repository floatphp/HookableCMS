jQuery(window).ready(function($)
{
    setTimeout(catchFeed(), 50000);
});

function catchFeed()
{
    if ( $( ".blog-feed" ).length )
    {
        $.ajax({
            type: 'POST',
            url: globalvars['root'] + '/module/catch/feed/',
            success: function(response)
            {
                var data = JSON.parse(response);
                var arr = [];
                $.each(data, function(i, item)
                {
                    arr.push(item)
                });
                arr = arr[6];
                var result = '';
                $.each(arr, function(i, item)
                {
                    result += '<li><a href="' + item.link + '">' + item.title + '</a></li>';
                });
                $(".blog-feed .ajax-loading").remove();
                $(".blog-feed ul").append(result);
            },
            error: function(resultat, statut, erreur)
            {
                console.log('Error' + statut);
            }
        });
    }
}