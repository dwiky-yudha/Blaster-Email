<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blaster Email</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
</head>
<body class="flex justify-center bg-emerald-100">

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 w-full md:w-1/3 shadow-xl mt-40 rounded-xl bg-white">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex justify-center flex-col items-center ">
      <lord-icon
        src="https://cdn.lordicon.com/uecgmesg.json"
        colors="primary:#121331,secondary:#059669"
        trigger="loop"
        delay="500"
        class="w-[120px] h-[120px]">
      </lord-icon>
      <h2 class="text-center text-2xl font-bold tracking-tight text-gray-900">Blaster Email</h2>
    </div>
  
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/kirim" method="post">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email Target</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-emerald-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-emerald-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Blast Email</button>
        </div>
      </form>
    </div>
    
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>