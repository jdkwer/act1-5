<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <h1>Student List</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Student Form --}}
    <h2>{{ isset($student) ? 'Edit Student' : 'Add New Student' }}</h2>
    <form method="POST" action="{{ isset($student) ? '/students/' . $student->id . '/update' : '/students' }}">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ $student->name ?? '' }}" required>
        <input type="email" name="email" placeholder="Email" value="{{ $student->email ?? '' }}" required>
        <input type="number" name="age" placeholder="Age" value="{{ $student->age ?? '' }}" required>
        <button type="submit">{{ isset($student) ? 'Update' : 'Add' }}</button>
    </form>

  <h1>Student List</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Student Form --}}
    <h2>{{ isset($student) ? 'Edit Student' : 'Add New Student' }}</h2>
    <form method="POST" action="{{ isset($student) ? '/students/' . $student->id . '/update' : '/students' }}">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ $student->name ?? '' }}" required>
        <input type="email" name="email" placeholder="Email" value="{{ $student->email ?? '' }}" required>
        <input type="number" name="age" placeholder="Age" value="{{ $student->age ?? '' }}" required>
        <button type="submit">{{ isset($student) ? 'Update' : 'Add' }}</button>
    </form>
</body>
</html>