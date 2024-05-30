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
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Total Records
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
                                <h1>{{ \App\Models\Record::count() }}</h1>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Total Courts
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas>
                                <h1>{{ \App\Models\Court::count() }}</h1>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid px-4">
    <form action="/search" method="GET">
        <div class="form-group">
            <label for="court">Select Court:</label>
            <select class="form-control" id="court" name="court">
            @foreach ($courts as $court)
            <option value="{{ $court->id }}">{{ $court->name }}</option>
            @endforeach
            ?>
            </select>
        </div>
        <div class="form-group">
            <label for="case_number">Case Number:</label>
            <input type="text" class="form-control" id="case_number" name="case_number">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

@if (isset($records))
    <div class="card">
        <div class="card-body">
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
        </div>
    </div>
@endif
            </main>
            @include('partials.footer')
</body>
</html>