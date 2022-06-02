{{-- <h2>create your question</h2>

<form action="/" method="post" enctype="multipart/form-data">
    @csrf
    <p>title</p>
    <input type="text" name="quest_title" id="quest_title" placeholder="Enter title question">
    <p hidden>slug</p>
    <input type="text" name="slug" id="slug" placeholder="Enter slug" disabled readonly hidden>
    <p>body</p>
    <input type="text" name="quest_body" id="quest_body" placeholder="Enter question">
    <p>image</p>
    <input type="file" name="quest_pict" id="quest_pict" placeholder="Enter image">
    <input type="submit">
</form>

<script>
    const title = document.querySelector('#quest_title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AskQuestion</title>
    <link rel="stylesheet" href="css/Askstyle.css" />
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <!-- Logo Title -->
    <link rel="icon" href="img/logo-garasiku.png" />
  </head>
  <body>
    <form action="/" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-wrap">
        <h1>Ajukan Pertanyaan</h1>
        <div class="judul-pertanyaan">
          <h3>Judul Pertanyaan</h3>
          <p>
            <input type="text" name="quest_title" id="quest_title" required />
          </p>
        </div>
        <p hidden>slug</p>
    <input type="text" name="slug" id="slug" placeholder="Enter slug" disabled readonly hidden>
        <div class="tulis-pertanyaan">
          <h3>Tuliskan Pertanyaan Anda</h3>
          <p>
            <input type="text" name="quest_body" id="quest_body" size="25px" maxlength="20" required />
          </p>
        </div>
        <div class="upload-image">
          <h3>Upload foto</h3>
          <div class="up"></div>
        </div>
        <p class="log">
          <label for="file" style="cursor: pointer">
            <span id="previewImg" class="iconify" data-icon="ant-design:upload-outlined" data-width="70px"></span>
          </label>

          <input type="file"  name="quest_pict" id="quest_pict" accept="image/*" required />
          <p><img id="output" width="60px" /></p>
          
        </p>

        <p>
          <input class="sub" type="submit" id="send" value="kirim" />
        </p>
        <a class="back" href="#"> <span class="iconify" data-icon="eva:arrow-ios-back-outline" data-width="24" data-height="24"></span> </a>
        <a class="back1" href="/">Kembali ke beranda </a>
       
      </div>
    </form>
    <script>
    const title = document.querySelector('#quest_title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AskQuestion</title>
    <link rel="stylesheet" href="css/Askstyle.css" />
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <!-- Logo Title -->
    <link rel="icon" href="img/logo-garasiku.png" />
  </head>
  <body>
    <form action="/" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-wrap">
        <h1>Ajukan Pertanyaan</h1>
        <div class="judul-pertanyaan">
          <h3>Judul Pertanyaan</h3>
          <p>
            <input type="text" name="quest_title" id="quest_title" required />
          </p>
        </div>
        <p hidden>slug</p>
    <input type="text" name="slug" id="slug" placeholder="Enter slug" disabled readonly hidden>
        <div class="tulis-pertanyaan">
          <h3>Tuliskan Pertanyaan Anda</h3>
          <p>
            <input type="text" name="quest_body" id="quest_body" size="25px" required />
          </p>
        </div>
        <div class="upload-image">
          <h3>Upload foto</h3>
          <div class="up"></div>
        </div>
        <p class="log">
          <label for="file" style="cursor: pointer">
            <span id="previewImg" class="iconify" data-icon="ant-design:upload-outlined" data-width="70px"></span>
          </label>

          <input type="file" id="file" name="quest_pict" accept="image/*" required />
          <p><img id="output" width="60px" /></p>
          
        </p>

        <p>
          <input class="sub" type="submit" id="send" value="kirim" />
        </p>
        <a class="back" href="#"> <span class="iconify" data-icon="eva:arrow-ios-back-outline" data-width="24" data-height="24"></span> </a>
        <a class="back1" href="/">Kembali ke beranda </a>
       
      </div>
    </form>
    <script>
        const title = document.querySelector('#quest_title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    </script>
  </body>
</html>