<html>
    <head>
        <title>Pusher Test</title>
        <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
        <script>

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('93b6a355808ce302bc9b', {
                cluster: 'ap1'
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('form-submitted', function(data) {
                alert(JSON.stringify(data));
                console.log("hai there");
            });
        </script>
    </head>
    <body>
        <h1>Pusher Test</h1>
        <p>
        Try publishing an event to channel <code>my-channel</code>
        with event name <code>my-event</code>.
        </p>
    </body>
</html>
