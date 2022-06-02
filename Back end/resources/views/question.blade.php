
<form action="/logout" method="post">
    @csrf
<button type="submit">logout</button>
</form>

<h2>{{ auth()->user()->username }}</h2>

<a href="/create">create new question</a>

@foreach ($question as $quest)
    <h2>
    <a href="/question/{{$quest->id}}">{{$quest->quest_title}}</a>
    </h2>
    <h5>{{$quest->quest_body}}</h5>
    <h5>{{$quest->quest_pict}}</h5>
    <h5>{{$quest->ans_count}}</h5>
    <button>
        <a href="/deletequestion/{{$quest->id}}">delete</a>
    </button>
    
    {{-- <form action="/{{$quest->id}}" method="post">
        @method('delete')
        @csrf
        <button>delete</button>
    </form> --}}
@endforeach