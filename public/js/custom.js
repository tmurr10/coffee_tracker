$(document).ready(function () {
    $( '#coffee_button' ).click(function(){
        var id = $( '#user_dropdown' ).val();
        if (id == 0) {
            window.location = "/profile/";
        } else {
            window.location = "/coffee/" + id;
        }
    });

    $( '#profile_button' ).click(function(){
        var id = $( '#user_dropdown' ).val();
        if (id == 0) {
            window.location = "/profile/";
        } else {
            window.location = "/profile/" + id;
        }
    });

    $( '#user_dropdown' ).change(function() {
        var id = $( this ).val();
        if (id == 0) {
            window.location = "/profile/";
            return;
        }

        if ($( '.index-page' ).length) {
            window.location = "/profile/" + id;
        } else if ($( '.profile-page' ).length) {
            window.location = "/profile/" + id;
        } else if ($( '.coffee-page' ).length) {
            window.location = "/coffee/" + id;
        }
    });

    if ($( '.coffee-page' ).length) {
        $( '#add_coffee' ).click(function() {
            var id = $( '#id' ).val();
            $.get('/addcoffee/' + id, function(data) {
                if (typeof(data) != "undefined" && typeof(data['timestamp']) != "undefined") {
                    $( '.coffee-list' ).append('<div class="coffee-time">' + '-' + data['timestamp'] + '</div>');
                }
            });
        });
    }
});