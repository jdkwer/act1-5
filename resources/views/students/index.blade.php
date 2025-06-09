<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Add Student</h2>
    <form method="POST" action="/students">
        @csrf
        <input name="name" placeholder="Name" required>
        <input name="email" type="email" placeholder="Email" required>
        <input name="age" type="number" placeholder="Age" required>
        <button type="submit">Add</button>
    </form>

        <h1>All Students</h1>
    <ul>
    @foreach ($students as $student)
        <li>{{ $student->name }} ({{ $student->email }}, {{ $student->age }} yrs)</li>
    @endforeach
    </ul>


</body>
</html>