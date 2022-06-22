<!DOCTYPE html>
<html lang="ja">
<head>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>お問い合わせ</title>
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
    .kome{
      color:red;
    }
    .sample{
      color:rgb(188, 182, 182);
    }
  </style>
</head>
<body>
  <div>
    <h1>お問い合わせ</h1>
    <form action="/contact/confirm" method="POST">
    @csrf
      <div>
        <label>お名前 <span class=kome>※</span>
          <input type="text" name="last_name">
          <input type="text" name="first_name">
        </label>
        <div>
          @if($errors->has('last_name')) <span>{{ $errors->first('last_name') }}</span> @endif
          @if($errors->has('first_name')) <span>{{ $errors->first('first_name') }}</span> @endif
        </div>
        <div class=sample><span>例) 山田</span><span>例) 太郎</span></div>
      </div>
      <div>
        <label>性別 <span class=kome>※</span>
          <input type="radio" name="gender" value="1" checked="checked"><label for="1">男性</label>
          <input type="radio" name="gender" value="2"><label for="2">女性</label>
        </label>
        <div>
          @if($errors->has('gender')) <span>{{ $errors->first('gender') }}</span> @endif
        </div>
      </div>
      <div>
        <label>メールアドレス <span class=kome>※</span>
          <input type="email" name="email" value="{{ old('email') }}">
        </label>
        <div>
          @if($errors->has('email')) <span>{{ $errors->first('email') }}</span> @endif
        </div>
        <div class=sample>例) test@example.com</div>
      </div>
      <div>
        <label>郵便番号 <span class=kome>※</span> <span class = yubin>〒</span>
          <input type="text" name="postcode" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
        </label>
        <div>
          @if($errors->has('postcode')) <span>{{ $errors->first('postcode') }}</span> @endif
        </div>
        <div class=sample>例) 123-4567</div>
      </div>
      <div>
        <label>住所 <span class=kome>※</span>
          <input type="text" name="address" size="30">
        </label>
        <div>
          @if($errors->has('address')) <span>{{ $errors->first('address') }}</span> @endif
        </div>
        <div class=sample>例) 東京都渋谷区千駄ヶ谷1-2-3</div>
      </div>
      <div>
        <label>建物名
          <input type="text" name="building_name">
        </label>
        <div>
          @if($errors->has('building_name')) <span>{{ $errors->first('building_name') }}</span> @endif
        </div>
        <div class=sample>例) 千駄ヶ谷マンション101</div>
      </div>
      <div>
        <label>ご意見 <span class=kome>※</span>
          <input type="textarea" name="opinion">
        </label>
        <div>
          @if($errors->has('opinion')) <span>{{ $errors->first('opinion') }}</span> @endif
        </div>
      </div>
      <button type="submit">
        確認
      </button>
    </form>
  </div>
</body>
</html>
