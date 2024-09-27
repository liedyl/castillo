<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Simple Calculator</h1>
    <form id="calculatorForm">
        <div class="form-group">
            <label for="number1">Enter First Number:</label>
            <input type="number" class="form-control" id="number1" required>
        </div>
        <div class="form-group">
            <label for="number2">Enter Second Number:</label>
            <input type="number" class="form-control" id="number2" required>
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>

    <div id="results" class="mt-4" style="display: none;">
        <h3>Results:</h3>
        <p id="sum"></p>
        <p id="difference"></p>
        <p id="product"></p>
        <p id="quotient"></p>
    </div>
</div>

<script>
    document.getElementById('calculatorForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        const num1 = parseFloat(document.getElementById('number1').value);
        const num2 = parseFloat(document.getElementById('number2').value);

        const sum = num1 + num2;
        const difference = num1 - num2;
        const product = num1 * num2;
        const quotient = num2 !== 0 ? (num1 / num2) : 'Cannot divide by zero';

        // Display results
        document.getElementById('sum').innerText = `Sum: ${sum}`;
        document.getElementById('difference').innerText = `Difference: ${difference}`;
        document.getElementById('product').innerText = `Product: ${product}`;
        document.getElementById('quotient').innerText = `Quotient: ${quotient}`;

        // Show results
        document.getElementById('results').style.display = 'block';
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
