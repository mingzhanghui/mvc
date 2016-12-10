/**
 * Created by mzh on 12/6/16.
 */
$(function() {

    $.get('dashboard/xhrGetListings', function(o) {
        var list = $('#listInserts');
        for (var i = 0; i < o.length; i++) {
            list.append('<div>' + o[i].text + '<a class="del" rel="'+ o[i].id +'" ' +
                'href="javascript:;">&times;</a></div>');
        }
        list.on('click', '.del', function(e) {
            delItem = $(this);
            var id = $(this).attr('rel');
            $.post('dashboard/xhrDeleteListing', {'id':id}, function(o) {
                delItem.parent().remove();
            }, 'json');
            return false;
        });
    }, "json");


    $('#randomInsert').submit(function() {
        var url = $(this).attr("action");
        var data = $(this).serialize();

        $.post(url, data, function(o) {
            $('#listInserts').append('<div>' + o.text + '<a class="del" rel="'+ o.id
                +'" href="javascript:;">&times;</a></div>');
        }, 'json');

        return false;
    });

});
