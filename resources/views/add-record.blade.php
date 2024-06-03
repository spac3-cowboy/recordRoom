<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Add Records - Record Room Natore Judge Court</title>
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
        <br>
         <h2 class="text-center">নতুন নথির তথ্য যুক্ত করুন</h2><br>
         <!-- Display success message if it exists -->
         @if(session('success'))
         <div class="alert alert-success">
            {{ session('success') }}
         </div>
         @endif
         <form action="{{ route('records.store') }}" method="POST">
            @csrf
            <div>
               <label for="court_id">আদালত:</label><br>
               @foreach(\App\Models\Court::all() as $court)
               <input type="radio" id="court{{ $court->id }}" name="court_id" value="{{ $court->id }}">
               <label for="court{{ $court->id }}">{{ $court->name }}</label><br>
               @endforeach
            </div>
            <br>
            <div>
               <label for="serial_number">ক্রমিক নং:</label><br>
               <input type="text" id="serial_number" name="serial_number"><br><br>
            </div>
            <!-- Date of Receiving -->
            <div>
               <label for="date_of_receiving">নথি গ্রহণের তারিখ:</label><br>
               <select name="receiving_day" id="receiving_day">
                  @for ($i = 1; $i <= 31; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
               </select>
               <select name="receiving_month" id="receiving_month">
                  @for ($i = 1; $i <= 12; $i++)
                  <option value="{{ $i }}">{{ date("F", mktime(0, 0, 0, $i, 10)) }}</option>
                  @endfor
               </select>
               <select name="receiving_year" id="receiving_year">
                  @for ($i = date('Y'); $i >= date('Y') - 100; $i--)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
               </select>
            </div>
            <div>
               <label for="case_number">মোকদ্দমা নম্বর:</label><br>
               <input type="text" id="case_number" name="case_number"><br><br>
            </div>
            <div>
               <label for="class">শ্রেণি:</label><br>
               <input type="text" id="class" name="class"><br><br>
            </div>
            <div>
               <label for="file">ফাইল:</label><br>
               <input type="text" id="file" name="file"><br><br> <!-- Changed to text input -->
            </div>
            <!-- Date of Settlement -->
            <div>
               <label for="date_settlement">নিষ্পত্তির তারিখ:</label><br>
               <select name="settlement_day" id="settlement_day">
                  @for ($i = 1; $i <= 31; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
               </select>
               <select name="settlement_month" id="settlement_month">
                  @for ($i = 1; $i <= 12; $i++)
                  <option value="{{ $i }}">{{ date("F", mktime(0, 0, 0, $i, 10)) }}</option>
                  @endfor
               </select>
               <select name="settlement_year" id="settlement_year">
                  @for ($i = date('Y'); $i >= date('Y') - 100; $i--)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
               </select>
            </div>
            <div>
    <label for="rr_number">RR নম্বর:</label><br>
    <input type="text" id="rr_number" name="rr_number" /><br><br>
</div>
            <div>
    <label for="comments">মন্তব্য:</label><br>
    <textarea id="comments" name="comments" rows="4" cols="50"><?php echo isset($comments) && !empty($comments) ? $comments : '-'; ?>
    </textarea><br><br>
</div>
            <button type="submit">Add Record</button>
         </form>
      </div>
      </main>
      @include('partials.footer')
   </body>
</html>