<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSON Response Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        #data {
            display: none;
        }
    </style>
</head>
<body>
    <h1>JSON Response Example</h1>

    <p>This page demonstrates how to make a single-page web client request using AJAX to
    retrieve and display JSON data.</p>

    <h2>Response Data</h2>
    <div id="data"></div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'http://localhost:8019/', // Replace with the actual PHP file URL
                type: 'GET',
                success: function(response) {
                    // Create a new variable to store the HTML output
                    let output = '<ul>';
                    
                    // Iterate over the data array in the response
                    response.data.forEach(function(item) {
                        output += `<li>Name: ${item.name}, Age: ${item.age}, Email: ${item.email}</li>`;
                    });

                    output += '</ul>';

                    // Inject the formatted HTML into the #data div
                    $('#data').html(output);
                    $('#data').show();
                },
                error: function(xhr, status, error) {
                    console.log("Error occurred: " + error);
                }
            });
        });
    </script>

</body>
</html>
