<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
</head>
<body>
    <h1>QR Code Scanner</h1>
    <form id="qrForm" method="POST" action="/qr-scan">
        @csrf
        <label for="qr_code">Enter QR Code:</label>
        <input type="text" id="qr_code" name="qr_code" required>
        <button type="submit">Scan</button>
    </form>
    <div id="response"></div>

    <script>
        const form = document.getElementById('qrForm');
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(form);
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
            });
            const result = await response.json();
            document.getElementById('response').innerText = result.message;
        });
    </script>
</body>
</html>