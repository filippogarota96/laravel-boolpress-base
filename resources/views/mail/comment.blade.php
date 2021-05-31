<h1>Nuovo Commento</h1>

<h4>
  il post commentato è: {{$post->title}}
</h4>

<a href="{{route('admin.post.show', ['post' => $post->id])}}"></a>