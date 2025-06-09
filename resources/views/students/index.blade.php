<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Manager</title>
</head>
<body>

    <p>Welcome, {{ Auth::user()->name }}</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
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

    {{-- Student List --}}
    <h2>All Students</h2>
    <ul>
        @foreach ($students as $student)
            <li>
                {{ $student->name }} ({{ $student->email }}, {{ $student->age }} years old)
                <a href="/students/{{ $student->id }}/edit">Edit</a>
                <form method="POST" action="/students/{{ $student->id }}/delete" style="display:inline;">
                    @csrf
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>
