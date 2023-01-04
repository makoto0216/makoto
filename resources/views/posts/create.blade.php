<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head>
    <body class="antialiased">
       <h1>Blog Name</h1>
       <form action='/posts' method="POST">
           @csrf
           <!--セキュリティの担保のため、他のサイトからのリクエストを許容しないように定義するもの。
           formリクエストを送る際に必須となる-->
           <div class= "title">
               <h2>Title</h2>
               <input type="text" name=post[title] placeholder="タイトル">
           </div>
           <div class= "body">
               <h2>Body</h2>
               <textarea name= "post[body]"placeholder="今日も1日お疲れさまでした。"></textarea>
               <!--TEXTAREAタグは、INPUTタグと違い、長い文章や改行を許容できる-->
           </div>
           <div>
               <input type="submit" value="store">
           </div>
       <div class = 'footer'>
           <a href="/">戻る</a>
    　 </div>
    </body>
</html>