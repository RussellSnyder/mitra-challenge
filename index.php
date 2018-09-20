<head>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="container py-4">
        <div id="challenge-2">
            <h3>Send Expression to Challenge 2 (API challenge)</h3>
            <div class="test 1 row">
                <input class="col-10" type="text" value="12*(2+(5*(7 + 12 - 10)/(1+1)))" />
                <input type="submit" class="col-2">
                <p class="mt-2 col-12">api response: <pre class="api-result"></pre></p>
            </div>

        </div>
    </div>
<script>
    const $challengeTwo = $('#challenge-2');

    // Bind the tests to evaluate
    $challengeTwo.on('click', 'input[type=submit]', function(e) {
        e.preventDefault();
        var $test = $(this).parent();

        var $input = $test.find('input[type=text]')
        var $apiResult = $test.find('.api-result')

        // send message to other codePen
        var apiCall = JSON.stringify({"expression": $input.val()});

        $.get( "endpoint.php?expression=" + encodeURIComponent(apiCall), function( data ) {
        }).done(function(data) {
            $apiResult.html( data );
        })
    })

</script>
</body>
