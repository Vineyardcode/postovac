<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Postovač</title>
  @vite(['resources/css/app.css'])

</head>
<body>

  <div class="border-2 border-blue-500 border-dashed rounded-lg p-4 m-5 flex flex-col gap-12">
    <h1 class="text-3xl">Vytvořte si post</h1>
    <form action="/create-post" method="POST" class="flex flex-col gap-12">
      @csrf
      <h1 class="text-lg bg-red-600 font-bold">Téma</h1>
      <input type="text" name="title" placeholder="téma postu">
      <h1 class="text-lg bg-red-600 font-bold">Post</h1>
      <textarea name="body" placeholder="o čem si dnes chcete postnout ?"></textarea>
      <h1 class="text-lg bg-red-600 font-bold">Barva Postu</h1>
      <input type="text" name="color" placeholder="zadejte anglický název vaší oblíbené barvy">
      <button>Postnout</button>
    </form>
  </div>

  <div class="border-2 border-blue-500 border-dashed rounded-lg p-4 m-5 flex flex-col justify-center align-top">
    <h2 class="text-3xl">Minulé Posty</h2>

    @foreach ($posts as $post)

    <div class="m-5 text-center flex flex-col gap-7" style="background: {{ $post['color'] }}">


            <h1 class="text-xl font-bold underline">{{ $post['title'] }}</h1>
            <p class="text-lg font-semibold border-2 py-5 mx-16">{{ $post['body'] }}</p>
            <p>Vyvořeno: {{ $post['created_at'] }}</p>
            <p>Upraveno: {{ $post['created_at'] }}</p>
            <p class="font-bold">Barva postu: {{ $post['color'] }}</p>
            <button class="text-blue-500 bg-white"><a href="/edit-post/{{ $post->id }}">Upravit post</a></button>
            <form action="/delete-post/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-red-500 bg-white">Smazat post</button>
            </form>

        </div>

    @endforeach
</div>




</body>
</html>
