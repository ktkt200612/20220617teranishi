<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>検索</title>
  <style>
    html, body, div, span, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    abbr, address, cite, code,
    del, dfn, em, img, ins, kbd, q, samp,
    small, strong, sub, sup, var,
    b, i,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section, summary,
    time, mark, audio, video {
      margin:0;
      padding:0;
      border:0;
      outline:0;
      font-size:100%;
      vertical-align:baseline;
      background:transparent;
    }

    body {
      line-height:1;
    }

    article,aside,details,figcaption,figure,
    footer,header,hgroup,menu,nav,section {
      display:block;
    }

    nav ul {
      list-style:none;
    }

    blockquote, q {
      quotes:none;
    }

    blockquote:before, blockquote:after,
    q:before, q:after {
      content:'';
      content:none;
    }

    a {
      margin:0;
      padding:0;
      font-size:100%;
      vertical-align:baseline;
      background:transparent;
    }

    /* change colours to suit your needs */
    ins {
      background-color:#ff9;
      color:#000;
      text-decoration:none;
    }

    /* change colours to suit your needs */
    mark {
      background-color:#ff9;
      color:#000;
      font-style:italic;
      font-weight:bold;
    }

    del {
      text-decoration: line-through;
    }

    abbr[title], dfn[title] {
      border-bottom:1px dotted;
      cursor:help;
    }

    table {
      border-collapse:collapse;
      border-spacing:0;
    }

    /* change border colour to suit your needs */
    hr {
      display:block;
      height:1px;
      border:0;  
      border-top:1px solid #cccccc;
      margin:1em 0;
      padding:0;
    }

    input, select {
      vertical-align:middle;
    }
  </style>
</head>
<body>
  <h1>管理システム</h1>
  <form action="/contact/search" method="POST">
  @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    <input type="reset" name="reset" value="リセット" >
  </form>
  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th></th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
    </tr>
    @if (@isset($items))
    @foreach ($items as $item)
    <tr>
      <td>
        {{$item->getId()}}
      </td>
      <td>
        {{$item->getLastname()}}
      </td>
      <td>
        {{$item->getFirstname()}}
      </td>
      <td>
        {{$item->getGender()}}
      </td>
      <td>
        {{$item->getEmail()}}
      </td>
      <td>
        {{$item->getOpinion()}}
      </td>
    </tr>
    <td>
      <form action="/contact/delete" method="POST">
      @csrf
        <button type="submit" name="id" value="{{$item->id}}" >削除</button>
      </form>
    </td>
  </table>
  @endforeach
  @endif
</body>
</html>
