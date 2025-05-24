<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blaster Email</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center bg-emerald-100">

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 w-full md:w-1/3 shadow-xl mt-40 rounded-xl bg-white">
    <div class="text-center">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Blaster Email</h2>
    </div>

    <div class="mt-4">
      <form class="space-y-6" action="/kirim" method="post">
        @csrf

        {{-- Input Email Dinamis --}}
        <div id="email-inputs">
          <div class="email-group mb-2">
            <input name="emails[]" type="email" required placeholder="Masukkan email"
              class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-900 shadow-sm">
          </div>
        </div>

        <div class="flex justify-between items-center mb-2">
          <button id="btnTambah" type="button" onclick="tambahEmail()"
            class="text-sm text-emerald-600 hover:underline">+ Tambah Email</button>
        </div>

        {{-- Input HTML --}}
        <div>
          <label for="isiHtml" class="block text-sm font-medium leading-6 text-gray-900">Isi HTML</label>
          <textarea name="html_content" id="isiHtml" rows="8"
            class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-900 shadow-sm"
            placeholder="<h1>Halo!</h1>"><!DOCTYPE html>
<html>
<head>
  <style>
    body { font-family: Arial, sans-serif; }
    h1 { color: #059669; }
  </style>
</head>
<body>
  <h1>Halo Dunia!</h1>
  <p>Email ini dikirim dari Laravel.</p>
</body>
</html></textarea>
        </div>

        {{-- Tombol Preview --}}
        <div class="flex justify-end gap-2 mt-2">
          <button type="button" onclick="previewHtml()"
            class="text-sm text-blue-600 underline hover:text-blue-800">🔍 Preview HTML</button>
        </div>

        {{-- Tombol Kirim --}}
        <button type="submit"
          class="w-full bg-emerald-600 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-emerald-500">
          Blast Email
        </button>
      </form>
    </div>
  </div>

  <script>
    const maxEmail = 10;
    let previewWindow = null;

    function tambahEmail() {
      const container = document.getElementById('email-inputs');
      const count = container.querySelectorAll('.email-group').length;
      const btn = document.getElementById('btnTambah');

      if (count >= maxEmail) return;

      const div = document.createElement('div');
      div.className = 'email-group mb-2';
      div.innerHTML = `
        <div class="flex gap-2">
          <input name="emails[]" type="email" required placeholder="Masukkan email"
            class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-900 shadow-sm">
          <button type="button" onclick="hapusEmail(this)" class="text-red-500 text-sm">Hapus</button>
        </div>
      `;
      container.appendChild(div);
      updateTambahBtn();
    }

    function hapusEmail(button) {
      const container = document.getElementById('email-inputs');
      const groups = container.querySelectorAll('.email-group');

      if (groups.length <= 1) {
        alert("Minimal harus ada 1 email");
        return;
      }

      button.closest('.email-group').remove();
      updateTambahBtn();
    }

    function updateTambahBtn() {
      const count = document.querySelectorAll('#email-inputs .email-group').length;
      const btn = document.getElementById('btnTambah');
      btn.style.display = count >= maxEmail ? 'none' : 'inline';
    }

    function previewHtml() {
      const isi = document.getElementById('isiHtml').value;
      if (!previewWindow || previewWindow.closed) {
        previewWindow = window.open('', '_blank');
      }
      previewWindow.document.open();
      previewWindow.document.write(generatePreviewHtml(isi));
      previewWindow.document.close();
    }

    function generatePreviewHtml(content) {
      return `
        <!DOCTYPE html>
        <html>
          <head>
            <style>
              .preview-container {
                padding: 20px;
                background: #f9f9f9;
                border: 1px solid #ddd;
                font-family: Arial, sans-serif;
              }
            </style>
          </head>
          <body>
            <div class="preview-container">
              ${content}
            </div>
          </body>
        </html>
      `;
    }

    document.addEventListener('DOMContentLoaded', () => {
      const textarea = document.getElementById('isiHtml');
      textarea.addEventListener('input', () => {
        if (previewWindow && !previewWindow.closed) {
          previewWindow.document.open();
          previewWindow.document.write(generatePreviewHtml(textarea.value));
          previewWindow.document.close();
        }
      });
    });
  </script>
</body>

</html>