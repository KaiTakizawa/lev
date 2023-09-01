<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head>
    <body class="antialiased">
      <h1>編集画面</h1>
      <form action="/posts/{{ $post->id }}" method="POST">
          @csrf
          @method('PUT')
          <div class="content_title">
              <h2>Title</h2>
             <input type='text' name='post[title]' value="{{ $post->title }}">
          </div>
          <div class="content_body">
              <h2>Body</h2>
              <input type="textarea" name="post[body]" placeholder="今日もお疲れ様でした。">
          </div>
          <input type="submit" value="保存">
      </form>
       <div class='footer'>
           <a href="/posts/{{ $post->id }}">戻る</a>
       </div>
       
        
    </body>
</html>
