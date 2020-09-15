@extends('layouts.layout')
@section('title','Index')
@section('main')
    <main>
  <div id="eyecatch">
    <p>estra</p>
  </div>
  <div id="about" class="wrap">
    <h2 class="section-title">about</h2>
    <div class="flex around">
      <div class="about-left">
        <img src="img/bg2.jpg" alt="" />
      </div>
      <div class="about-right">
        <h3>estra inc.</h3>
        <p>
          私たちは、お客様の満足度を徹底的に追及することで、お客様・市場・時代のニーズを的確に捉え、事業の拡大と周辺ビジネスによる差別化、業界における圧倒的な地位の確立を図るべく積極的な事業活動を行っています。
        </p>
        <ol>
          <li>コーチング事業</li>
          <li>プログラミング事業</li>
          <li>SaaS事業</li>
        </ol>
      </div>
    </div>
  </div>
  <div id='business'>
    <h2 class="section-title">service</h2>
    <div class="flex around business-wrap">
      @foreach ($data as $key => $value)
        <div class="business-cat">
        <img src="img/business-icon.png" alt="">  
        <h3>{{$key}}</h3>
        <p>{{$value}}</p>
        </div>  
      @endforeach
    </div>
  </div>
  <div id="company">
    <h2 class="section-title">company</h2>
    <table class="contain">
      <tr>
        <th>会社名</th>
        <td>株式会社estra</td>
      </tr>
      <tr>
        <th>代表者名</th>
        <td>福場凜太郎</td>
      </tr>
      <tr>
        <th>本社所在地</th>
        <td>東京都渋谷区1-1</td>
      </tr>
      <tr>
        <th>従業員数</th>
        <td>100名</td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>0120-000-0000</td>
      </tr>
      <tr>
        <th>FAX</th>
        <td>0120-000-0000</td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>rintaro@estra.inc</td>
      </tr>
      <tr>
        <th>資本金</th>
        <td>1000万円</td>
      </tr>
      <tr>
        <th>事業内容</th>
        <td>コーチング</td>
      </tr>
    </table>
  </div>
  <div id="contact">
    <h2 class="section-title">contact</h2>
    <form action="/" class="form" method="post">
      @@csrf
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name">
      </div>
      <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="user_mail">
      </div>
      <div>
        <label for="tell">Tell:</label>
        <input type="tell" id="tell" name="user_tell">
      </div>
      <div>
        <label for="msg">Message:</label>
        <textarea id="msg" name="user_message"></textarea>
      </div>
      <div class="button-submit">
        <button type="submit" class="button">Button</button>
      </div>
    </form>
  </div>
    </main>
@endsection