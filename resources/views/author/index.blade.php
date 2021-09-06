@foreach ($authors as $author)
  <a href="{{route('book.edit',[$book])}}">{{$author->title}} {{$author>authorAuthor->name}} {{$author->authorAuthor->surname}}</a>
  <form method="POST" action="{{route('book.destroy', [$book])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach
