
{{-- <form action="/logout" method="post">
    @csrf
<button type="submit">logout</button>
</form> 

<a href="/logout">logout</a>

<h2>{{ auth()->user()->username }}</h2>

<a href="/create">create new question</a>

@foreach ($question as $quest)
    <h2>{{ $quest->user->username }}</h2>
    <h2>{{ $quest->created_at }}</h2>
    <h2>
    <a href="/question/{{$quest->slug}}">{{$quest->quest_title}}</a>
    </h2>
    <h5>{{$quest->quest_body}}</h5>
    <h5>{{$quest->quest_pict}}</h5>
<button>
        <a href="/deletequestion/{{$quest->id}}">delete</a>
    </button> 
    
@endforeach --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Home</title>
     <!-- Logo Title -->
    <link rel="icon" href="img/logo-garasiku.png" />
  </head>
  <body>
    <header>
      <nav>
        <div class="logo-navbar"><img src="img/logo-garasiku.png" alt="logo" /></div>
        <h3 class="Judul">GarasiKu</h3>
        <div class="profile-navbar"><img src="img/user.png" alt="user" /></div>
      
        <a href="#"><span id="info" class="iconify" data-icon="ion:information-circle-outline" data-width="45" data-height="45"></span></a>
       
       
        <a href="/logout"><span id="logout" class="iconify" data-icon="bx:log-out" data-width="45"></span></a>
       
        <h3 class="username">{{ auth()->user()->username }}</h3>
      </nav>
    </header>
    <main id="layar-main">
      <div class="kontent">
        <h1>Telusuri apa yang ingin kamu ketahui tentang otomotif.</h1>
        <p>
          <a href="/create"><input class="log" type="submit" id="tambahpertanyaan" value="+Tambah Pertanyaan" /></a>
        </p>
      </div>
      @foreach ($question as $quest)
      <div id="question-form-wrap1">
        <h4>{{ $quest->user->username }}</h4>
        <h2>{{ $quest->quest_title }}</h2>
        <p>{{$quest->quest_body}}</p>
        <img id="gambar" src="img/user.png" alt="">
        <!-- Gambar pertanyaan yang tampil -->
        <img id="gambar-pertanyaan" src="img/{{ $quest->quest_pict }}" alt="">
        <div class="jawabpertanyaan">
          <a href="/question/{{$quest->slug}}"><h2>Jawab Pertanyaan</h2></a>
        </div>
      </div>
      @endforeach
      
    </main>
  </body>
</html>