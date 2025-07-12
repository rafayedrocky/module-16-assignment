<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Submission Confirmation</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card p-3">
        <p><strong>Name:</strong> {{ session('data.name') }}</p>
        <p><strong>Email:</strong> {{ session('data.email') }}</p>
        <p><strong>Message:</strong> {{ session('data.message') }}</p>
    </div>
</div>
</body>
</html>
