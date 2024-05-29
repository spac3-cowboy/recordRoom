<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Record Room Natore Judge Court</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    @include('partials.navbar')
    <div id="layoutSidenav">
        @include('partials.sidebar')
        <div id="layoutSidenav_content">
            <main>
            <h2>Add Record</h2>

<!-- Display success message if it exists -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('records.store') }}" method="POST">
    @csrf

    <div>
    <label for="court_id">Court:</label><br>
    @foreach(\App\Models\Court::all() as $court)
    <input type="radio" id="court{{ $court->id }}" name="court_id" value="{{ $court->id }}">
    <label for="court{{ $court->id }}">{{ $court->name }}</label><br>
    @endforeach
    </div>
    <br>

    <div>
        <label for="serial_number">Serial Number:</label><br>
        <input type="text" id="serial_number" name="serial_number"><br><br>
    </div>

    <div>
        <label for="date_of_receiving">Date of Receiving:</label><br>
        <input type="date" id="date_of_receiving" name="date_of_receiving"><br><br>
    </div>

    <div>
        <label for="case_number">Case Number:</label><br>
        <input type="text" id="case_number" name="case_number"><br><br>
    </div>

    <div>
        <label for="class">Class:</label><br>
        <input type="text" id="class" name="class"><br><br>
    </div>

    <div>
            <label for="file">File:</label><br>
            <input type="text" id="file" name="file"><br><br> <!-- Changed to text input -->
        </div>

    <div>
        <label for="date_of_settlement">Date of Settlement:</label><br>
        <input type="date" id="date_of_settlement" name="date_of_settlement"><br><br>
    </div>

    <div>
        <label for="comments">Comments:</label><br>
        <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>
    </div>

    <button type="submit">Add Record</button>
</form>
            </main>
            @include('partials.footer')
</body>
</html>