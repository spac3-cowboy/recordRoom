<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Court - Record Room Natore Judge Court</title>
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
                    <h1 class="mt-4">Add Court</h1>

                    <!-- Display success message if it exists -->
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">আদালত যুক্ত করুন</li>
                    </ol>
                    <form action="{{ route('courts.store') }}" method="POST">
        @csrf
        <label for="name">আদালতের নাম:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <button type="submit">Add Court</button>
    </form>
                </div>
            </main>
            @include('partials.footer')
</body>
</html>