<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="none" />
    <title>Carex Field Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pc.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sp.css" />
    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      defer
    ></script>
    <script
      src="https://kit.fontawesome.com/60e197bf03.js"
      crossorigin="anonymous"
      defer
    ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script.js" defer></script>
  </head>
  <body>
    <header>
      <div class="inner">
        <h1>Carex Field<br />Portfolio</h1>
        <nav class="nav">
          <ul>
            <li><a href="#works">Works</a></li>
            <li><a href="#about">About</a></li>
          </ul>
        </nav>
        <div class="openbtn"><span></span><span></span><span></span></div>
      </div>
    </header>
    <main>
      <section id="works">
        <div class="inner">
          <h2>Works</h2>
          <p class="h2sub">制作したもの</p>
          <div class="flex">
            <div class="pop_up fadeUp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/2ot.png" alt="2OT" />
              <h3>2OT</h3>
            </div>
            <div class="pop_up fadeUp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/abc-school.png" alt="ABC School" />
              <h3>ABC School</h3>
            </div>
            <div class="pop_up fadeUp">
              <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio.png" alt="Carex Field Portfolio" />
              <h3>Carex Field Portfolio</h3>
            </div>
          </div>
          <div class="modal">
            <div class="modal-container">
              <div class="modal-bg"></div>
              <div class="modal-content">
                <p class="modal-close">×</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/mockup_2ot.jpg" alt="2OT_mockup" />
                <table>
                  <tr>
                    <th>サイトタイトル：</th>
                    <td>
                      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/2ot' ?>" target="_blank"
                        >2OT - Double Over Time-</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <th>制作期間：</th>
                    <td>６～７人日</td>
                  </tr>
                  <tr>
                    <th>担当：</th>
                    <td>企画／デザイン／コーディング</td>
                  </tr>
                  <tr>
                    <th>コメント：</th>
                    <td>
                      NBA観戦をモチーフにしたスポーツカフェの架空サイトです。<br />ゆったりとした時間を過ごしてもらうことを意識して、余白を大きめに取るようにデザインしました。<br />また、配色についても淡い暖色系を使用しています。
                    </td>
                  </tr>
                </table>
                <div class="modal-btn"><p>閉じる</p></div>
              </div>
            </div>
            <div class="modal-container">
              <div class="modal-bg"></div>
              <div class="modal-content">
                <p class="modal-close">×</p>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/mockup_abc-school.jpg"
                  alt="ABC-School_mockup"
                />
                <table>
                  <tr>
                    <th>サイトタイトル：</th>
                    <td>
                      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/abc-school' ?>" target="_blank"
                        >ABC School Kids Programming</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <th>制作期間：</th>
                    <td>５～６人日</td>
                  </tr>
                  <tr>
                    <th>担当：</th>
                    <td>デザイン／コーディング</td>
                  </tr>
                  <tr>
                    <th>コメント：</th>
                    <td>
                      職業訓練の修了制作として作った、子ども向けのプログラミングスクールの架空LPサイトです。<br />子どもが入塾してもらうことを目標に、小学生の子どもを持つ親をターゲットとしています。<br />小学校での必修化などによるプログラミング教育の重要性の説明や、通われている方のレビューなどを取り込むことで、目標が達成されるように意識しました。
                    </td>
                  </tr>
                </table>
                <div class="modal-btn"><p>閉じる</p></div>
              </div>
            </div>
            <div class="modal-container">
              <div class="modal-bg"></div>
              <div class="modal-content">
                <p class="modal-close">×</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/mockup_portfolio.jpg" alt="Portfolio_mockup" />
                <table>
                  <tr>
                    <th>サイトタイトル：</th>
                    <td>
                      <a href="./front-page.php"
                        >Carex Field Portfolio</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <th>制作期間：</th>
                    <td>３人日</td>
                  </tr>
                  <tr>
                    <th>担当：</th>
                    <td>企画／デザイン／コーディング</td>
                  </tr>
                  <tr>
                    <th>コメント：</th>
                    <td>
                      私自身のポートフォリオサイトです。<br />この１ページで情報を得られるようにすることで、ページ移動の手間を少なくしています。<br />また、できるだけシンプルなサイト構造になるように意識しました。<br />プロフィールの部分などについては今後もブラッシュアップしていきたいです。
                    </td>
                  </tr>
                </table>
                <div class="modal-btn"><p>閉じる</p></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="about">
        <div class="inner">
          <h2>About</h2>
          <p class="h2sub">私について</p>
          <div class="profile">
            <h3>Profile</h3>
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="顔写真" class="faceimg" />
              <div class="profile2">
                <p>氏名：菅原 尭（すがわら たかし）</p>
                <p>生年月日：1992年1月22日</p>
                <p>
                  これまでフロントエンドエンジニアとして、新規Webサイトの立ち上げを中心に数多く担当してきました。
                </p>
                <p>
                  短い開発期間の案件も多く、限られたスケジュールの中で品質を担保しながら実装を進めるスピード感を強みとしています。<br>
                  そのため、再利用性を意識したコンポーネント設計や、修正影響範囲を最小限に抑える実装を心がけ、柔軟かつ迅速に対応してきました。
                </p>
                <p>
                  デザイナーやディレクターと密にコミュニケーションを取り、認識のズレを早期に解消することで、手戻りの少ない開発を実現してきたと考えています。
                </p>
              </div>
            </div>
          </div>
          <div class="skills">
            <h3>Skills</h3>
            <div class="skill_box">
              <div class="box">
                <img src="<?php echo get_template_directory_uri(); ?>/images/html.png" alt="HTML5/CSS3" />
                <div>
                  <p class="skill_name">HTML5/CSS3</p>
                  <p>
                    テキストエディタはVisual Studio
                    Codeを使用しています。レスポンシブデザインの対応も可能です。資格としてHTML5プロフェッショナル認定試験レベル2を取得しています。
                  </p>
                </div>
              </div>
              <div class="box">
                <i class="fa-brands fa-js"></i>
                <div>
                  <p class="skill_name">JavaScript</p>
                  <p>
                    jQueryで動きを出すなどを始めとして、基本的なものについては記述可能です。また、初めて触れるようなAPIでも、コードを理解しエンドユーザーが希望するような動きを設計した経験もあります。
                  </p>
                </div>
              </div>
              <div class="box">
                <i class="fa-brands fa-wordpress"></i>
                <div>
                  <p class="skill_name">WordPress</p>
                  <p>
                    テーマの作成も可能で、前職では検索機能の付いた商品ページの作成なども行っておりました。また、カスタムフィールドなどを用いて普段コーディングしない運営者でも使いやすいように設計することも可能です。
                  </p>
                </div>
              </div>
              <div class="box">
                <img src="<?php echo get_template_directory_uri(); ?>/images/photoshop.png" alt="Photoshop" />
                <div>
                  <p class="skill_name">Photoshop</p>
                  <p>
                    Webデザインの勉強にあたり、ソフトの基本的な操作を学び、現在はバナーの制作などをしています。また、Webサイトのデザインカンプ作成も行っています。
                  </p>
                </div>
              </div>
              <div class="box">
                <img src="<?php echo get_template_directory_uri(); ?>/images/seo.png" alt="SEO" />
                <div>
                  <p class="skill_name">SEO</p>
                  <p>
                    ユーザーの検索意図からSEOを意識したサイト構造を考えるなど、基礎的な知識については習得しています。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <p>&copy; Carex Field Portfolio all right reserved.</p>
    </footer>
  </body>
</html>
