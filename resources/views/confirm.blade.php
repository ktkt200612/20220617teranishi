<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>確認ページ</title>
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
  <div>
    <h1>確認ページ</h1>
    <form action="/contact/thanks" method="POST">
    @csrf
      <div>
        <label>お名前
          {{ $items['last_name'] }}
          {{ $items['first_name'] }}
          <input type="hidden" name="last_name" value="{{ $items['last_name'] }}" >
          <input type="hidden" name="first_name" value="{{ $items['first_name'] }}" >
        </label>
      </div>
      <div>
        <label>性別
          {{ $items['gender'] }}
          <input type="hidden"  name="gender" value="{{ $items['gender'] }}" >
        </label>
      </div>
      <div>
        <label>メールアドレス
          {{ $items['email'] }}
          <input type="hidden"  name="email" value="{{ $items['email'] }}" >
        </label>
      </div>
      <div>
        <label>郵便番号
          {{ $items['postcode'] }}
          <input type="hidden"  name="postcode" value="{{ $items['postcode'] }}" >
        </label>
      </div>
      <div>
        <label>住所
          {{ $items['address'] }}
          <input type="hidden"  name="address" value="{{ $items['address'] }}" >
        </label>
      </div>
      <div>
        <label>建物名
          {{ $items['building_name'] }}
          <input type="hidden"  name="building_name" value="{{ $items['building_name'] }}" >
        </label>
      </div>
      <div>
        <label>ご意見
          {{ $items['opinion'] }}
          <input type="hidden"  name="opinion" value="{{ $items['opinion'] }}" >
        </label>
      </div>
      <button type="submit">
        送信
      </button>
    </form>
    <form action="/contact/confirm" method="GET">
    @csrf
      <input type="submit" value="修正する">
    </form>
  </div>
</body>
</html>
