<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Display</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Select a Day</h1>
    <div class="text-center">
        <button class="btn btn-primary m-2" onclick="displayDay('Monday')">Monday</button>
        <button class="btn btn-primary m-2" onclick="displayDay('Tuesday')">Tuesday</button>
        <button class="btn btn-primary m-2" onclick="displayDay('Wednesday')">Wednesday</button>
        <button class="btn btn-primary m-2" onclick="displayDay('Thursday')">Thursday</button>
        <button class="btn btn-primary m-2" onclick="displayDay('Friday')">Friday</button>
    </div>

    <div id="result" class="mt-4" style="font-size: 24px; text-align: center;"></div>
</div>

<script>
    function displayDay(day) {
        document.getElementById('result').innerText = day;
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
