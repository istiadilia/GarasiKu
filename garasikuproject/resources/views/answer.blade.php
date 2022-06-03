{{-- <h2>{{ $singleQuestion->user->username }}</h2>

<h2>{{$singleQuestion->quest_title}}</h2>
<h5>{{$singleQuestion->quest_body}}</h5>
<h5>{{$singleQuestion->ans_count}}</h5>

<h5>answer</h5>
<form action="{{ url('answer') }}" method="post">
    @csrf
    <input type="hidden" name="quest_slug" value="{{ $singleQuestion->slug }}">
    <textarea name="ans_body" rows="3" required></textarea>
    <button type="submit">submit</button>
</form>

@forelse ($singleQuestion->answers as $answer)
    <h5>{{ $answer->user->username }}</h5>
    <h6>{{ $answer->created_at->format('d-m-y') }}</h6>
    <p>{{ $answer->ans_body }}</p>
@empty
    <h6>belum ada jawaban</h6>
@endforelse --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('/css/Answerstyle.css') }}" />
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Answer a Question</title>
  </head>

  <body>
    <!-- navbar -->
    <nav>
      <div class="logo-navbar"><img src="{{ url('/img/logo-garasiku.png') }}" alt="logo" /></div>
      <h3 class="Judul">GarasiKu</h3>
      <div class="profile-navbar"><img src="{{ url('/img/user.png') }}" alt="logo" /></div>
      <h3 class="username">{{ auth()->user()->username }}</h3>
    </nav>

    <div class="jumbotron">
      <a class="satu" href="/">kembali ke beranda</a>
      <a class="back" href="/"> <span class="iconify" data-icon="eva:arrow-ios-back-outline" data-width="24" data-height="24"></span> </a>
      <h1>{{$singleQuestion->quest_title}}</h1>
      <h2>Oleh {{ $singleQuestion->user->username }}, {{ $singleQuestion->created_at->format('d-m-y') }}</h2>
      {{-- <h3>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat inventore ipsa quae, sit assumenda voluptates, incidunt dolorum, provident voluptatem molestias distinctio doloribus deleniti expedita? Fugit labore consectetur
        accusantium quis doloribus?
      </h3>
      <img id="image-question" src="assets/image/kompas.png" alt="" /> --}}
    </div>
    <main>
      <!--box jawab pertanyaan-->
      <form action="{{ url('answer') }}" method="post">
        @csrf
        <input type="hidden" name="quest_slug" value="{{ $singleQuestion->slug }}">
        <div id="jawab-wrap">
          <div class="jawab">
            <p>
              <input name="ans_body" type="text" placeholder="Tuliskan jawaban anda" />
            </p>
            <p>
              <input class="log" type="submit" id="done" value="submit" />
            </p>
          </div>
        </div>
      </form>
      
      <!-- belum ada jawaban -->
      {{-- <div class="belumadajawaban">
        <h5>Belum Ada Jawaban</h5>
      </div> --}}


      <!--box tampilan jawaban-->
      @forelse ($singleQuestion->answers as $answer)
      <div class="tampilan">
        <div class="foto-tampilan"><img src="{{ url('/img/user.png') }}" alt="logo" /></div>
        <h3>{{ $answer->user->username }}</h3>
        <h2>Dijawab pada {{ $answer->created_at->format('d-m-y') }}</h2>
        <p>
          {{ $answer->ans_body }}
        </p>
        <!-- <div class="gambar-inputan"><img src="" alt="" /></div> -->
      </div>
      @empty
        <h5>belum ada jawaban</h5>
      @endforelse

      <div id="voting">
        <div class="upvote"></div>
        <div class="downvote"></div>
      </div>
    </main>
  </body>
</html>