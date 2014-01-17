function googleApiClientReady() {
    var apiKey = 'AIzaSyDp3pEyCSs_86Xq-J2zcV8D5gmYLQwftNw';
    var viewCount, subscribers;
    $('#username').keyup(function() {
        var username = $('input[name="username"]').val();
        gapi.client.setApiKey(apiKey);
        gapi.client.load('youtube', 'v3', function() {
            var request = gapi.client.youtube.channels.list({
                part: 'statistics',
                forUsername : username
            });
            request.execute(function(response) {
                viewCount = response.result.items[0].statistics.viewCount;
                subscribers = response.result.items[0].statistics.subscriberCount;
                $('input[name="subscribers"]').attr("placeholder", subscribers).blur();
                $('input[name="viewCount"]').attr("placeholder", viewCount).blur();
            });
        }); 
    })
    .keyup();
}