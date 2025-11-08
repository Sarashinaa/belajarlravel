<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Hasil Kesan Pesan</title>
  <style>
    .comment-card {
      border-radius: 15px;
      border: 1px solid #dee2e6;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .comment-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/form">Form Mahasiswa</a>
      <a class="btn btn-light btn-sm" href="/form">Kembali ke Form</a>
    </div>
  </nav>

  <div class="container mt-5">
    <h2 class="mb-4 text-center">Kesan & Pesan Mahasiswa</h2>
    
    <div class="row justify-content-center">
      <div class="col-md-8">
        
        @if(session('submissions'))
          @foreach(session('submissions') as $index => $submission)
          <div class="comment-card p-4 mb-4 bg-white">
            <div class="d-flex align-items-center mb-3">
              <div class="text-white rounded-circle d-flex align-items-center justify-content-center" 
                   style="width: 50px; height: 50px; font-size: 20px; font-weight: bold; background-color: {{ ['#0d6efd', '#198754', '#0dcaf0', '#ffc107', '#dc3545'][$index % 5] }};">
                {{ substr($submission['nama'], 0, 1) }}
              </div>
              <div class="ms-3">
                <h5 class="mb-0">{{ $submission['nama'] }}</h5>
                <small class="text-muted">NIM: {{ $submission['nim'] }}</small>
              </div>
            </div>
            
            <div class="mb-3">
              <h6 class="text-primary mb-2">Kesan:</h6>
              <p class="mb-0" style="text-align: justify;">{{ $submission['kesan'] }}</p>
            </div>
            
            <div>
              <h6 class="text-primary mb-2">Pesan:</h6>
              <p class="mb-0" style="text-align: justify;">{{ $submission['pesan'] }}</p>
            </div>
            
            <hr>
            <small class="text-muted">Dikirim pada: {{ $submission['tanggal'] }}</small>
          </div>
          @endforeach
        @else
          <div class="alert alert-info text-center">
            Belum ada kesan & pesan yang dikirim. <a href="/form" class="alert-link">Isi form sekarang</a>
          </div>
        @endif

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
