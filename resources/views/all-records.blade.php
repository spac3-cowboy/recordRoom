<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>All Records - Record Room Natore Judge Court</title>
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
            <h1 class="text-center">সকল রেকর্ডকৃত মামলার তথ্য</h1>
            <br>
            <table class="table">
               <thead>
                  <tr>
                     <th>আদালতের নাম</th>
                     <th>ক্রমিক নং</th>
                     <th>নথি গ্রহণের তারিখ</th>
                     <th>মোকদ্দমা নম্বর</th>
                     <th>শ্রেণি</th>
                     <th>ফাইল</th>
                     <th>নিষ্পত্তির তারিখ</th>
                     <th>RR নম্বর</th>
                     <th>মন্তব্য</th>
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
                     <td>{{ $record->rr_number }}</td>
                     <td>{{ $record->comments }}</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            {{ $records->links() }} <!-- Pagination links -->
         </div>
      </main>
      @include('partials.footer')
   </body>
</html>