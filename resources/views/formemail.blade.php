<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blaster Email</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .middle{
        display: flex;
        justify-content: center;
        align-items: center;
        width:100vw;
        
    }
  </style>
</head>
<body>
  <div class="middle">
    <div class="card">
        <div class=" font-bold underline">
            Blaster Email
        </div>
        <form method="post" action="/kirim">
            @csrf
                <div class="form-group">
                    <label>Alamat Email Saya</label>
                    <input class="form-control" type="text" name="email" required>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Kirim ke Email Saya</button>
                </div>
        </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>