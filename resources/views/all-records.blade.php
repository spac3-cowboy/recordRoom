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
    <h1>All Records</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Court</th>
                <th>Serial Number</th>
                <th>Date of Receiving</th>
                <th>Case Number</th>
                <th>Class</th>
                <th>File</th>
                <th>Date of Settlement</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->court->name }}</td>
                    <td>{{ $record->serial_number }}</td>
                    <td>{{ \Carbon\Carbon::parse($record->date_received)->format('F j, Y') }}</td>
                    <td>{{ $record->case_number }}</td>
                    <td>{{ $record->class }}</td>
                    <td>{{ $record->file }}</td>
                    <td>{{ \Carbon\Carbon::parse($record->date_settlement)->format('F j, Y') }}</td>
                    <td>{{ $record->comments }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $records->links() }} <!-- Pagination links -->
</main>
            @include('partials.footer')
</body>
</html>