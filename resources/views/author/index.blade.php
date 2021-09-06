@foreach ($authors as $author)
  <a href="{{route('author.edit',[$author])}}">{{$author->title}} {{$author>authorAuthor->name}} {{$author->authorAuthor->surname}}</a>
  <form method="POST" action="{{route('author.destroy', [$author])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach
