<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>女子高生になってみたー</title>
  <style>
    h1,h2,form{text-align:center}
    p{margin:1vmin;line-height:1.5}
    .resulttitle{background-color:#00c5ff;color:white;padding:4px 0;margin:0}
    .resulttable{font-size:3vmin;border:1.5vmin solid #00c5ff;width:480px;margin:4vmin auto}
    .resulttablecontainer{padding:2vmin}
    .resulttablecontainer p{margin:0}
    .tweet-button{color:white;background-color:#1d9bf0;border-radius:4px;padding:2px 10px;text-decoration:none}
  </style>
</head>
<body>
  <h1><a href="./" style="text-decoration:none">女子高生になってみたー</a></h1>
  <form method="GET">
    <input type="text" name="name" placeholder="名前を入力して下さい" autocomplete="off">
    <input type="submit" value="女子高生化">
  </form>
  <?php
    if(isset($_GET['name'])){
      $name=$_GET['name'];
      if($name===""){
        echo'<div>';
        echo'<p style="color:tomato;font-weight:bold;text-align:center">エラー：名前が入力されていません。</p>';
        echo'</div>';
        exit;
      }
      $hashed_name=md5($name);
      // var_dump($hashed_name);
      $a=(int)hexdec(substr($hashed_name,0,1));
      $b=(int)hexdec(substr($hashed_name,1,1));
      $c=(int)hexdec(substr($hashed_name,2,1));
      $d=(int)hexdec(substr($hashed_name,3,1));
      $e=(int)hexdec(substr($hashed_name,4,1));
      $f=(int)hexdec(substr($hashed_name,5,1));
      $g=(int)hexdec(substr($hashed_name,6,1));
      $h=(int)hexdec(substr($hashed_name,7,1));
      $i=(int)hexdec(substr($hashed_name,8,1));
      $j=(int)hexdec(substr($hashed_name,9,1));
      $k=(int)hexdec(substr($hashed_name,10,1));
      $l=(int)hexdec(substr($hashed_name,11,1));
      $m=(int)hexdec(substr($hashed_name,12,1));//得意科目a
      $n=(int)hexdec(substr($hashed_name,13,1));//得意科目b
      $o=(int)hexdec(substr($hashed_name,14,1));//性格
      $p=(int)hexdec(substr($hashed_name,15,1));//特徴a
      $q=(int)hexdec(substr($hashed_name,16,1));//特徴b
      $r=(int)hexdec(substr($hashed_name,17,1));//系統
      $s=(int)hexdec(substr($hashed_name,18,1));//目
      $t=(int)hexdec(substr($hashed_name,19,1));//組
      $u=(int)hexdec(substr($hashed_name,20,1));//学年a
      $v=(int)hexdec(substr($hashed_name,21,1));//学年b
      $w=(int)hexdec(substr($hashed_name,22,1));//学年c
      $x=(int)hexdec(substr($hashed_name,-9,1));//髪色
      $y=(int)hexdec(substr($hashed_name,-8,1));//髪質
      $z=(int)hexdec(substr($hashed_name,-7,1));//髪長
      $a0=(int)hexdec(substr($hashed_name,-6,1));//バスト(a/12)**4
      $a1=(int)hexdec(substr($hashed_name,-5,1));//バスト(b/4)**2
      $a2=(int)hexdec(substr($hashed_name,-4,1));//バストc*1
      $a3=(int)hexdec(substr($hashed_name,-3,1));//身長d*.4
      $a4=(int)hexdec(substr($hashed_name,-2,1));//身長e*1
      $a5=(int)hexdec(substr($hashed_name,-1,1));//身長f*1
      $favorite_subjects=["現代文","古典","英語","世界史","日本史","地理","倫理","政治・経済",
      "生物","化学","音楽","美術","保健","地学","書道","家庭科","情報","数学","物理","体育"];//20
      if($m>=8){
        $n+=16;
      }$favorite_subject=$favorite_subjects[$n%count($favorite_subjects)];

      $hair_colors=["黒","栗","茶","金","明るい","白","赤","青","緑","橙","桃","水","紫"];
      $hair_color=$hair_colors[$x%count($hair_colors)];

      $hair_qualities=["ふわふわ","さらさら","ぼさぼさ","くるくる"];
      $hair_quality=$hair_qualities[$y%count($hair_qualities)];

      $hair_lengths=["ロング","ミディアム","ショート","ポニーテール","ツインテール","アシンメトリー","ボブ"];
      $hair_length=$hair_lengths[$z%count($hair_lengths)];

      $grade_th=($u+$v+$w)%3+1;
      $class_ths=["1","2","3","4","5","6","7","8","A","B","C","D","E","F","G","H"];
      $class_th=$class_ths[$t%count($class_ths)];

      $eyeses=["ぱっちり","涼しげ","眠たげ"];
      $eye_counts=[2,2,1];//出現率7/16,6/16,3/16
      $eyes=[];
      foreach($eye_counts as$eye=>$count){
        $eyes=array_merge($eyes,array_fill(0,$count,$eyeses[$eye]));
      }$eye_opening=$eyes[$s%count($eyes)];

      $parties=["かわいい","綺麗","スポーツ","かわいい","綺麗"];//7:6:3
      $party=$parties[$r%count($parties)];

      $personalities=["カーディガンが好き","よく迷子になる","暗い部屋で寝られない","枯れ声",
      "先生に好かれてる","よくため息をつく","ペットに懐かれない","勘が鋭い","飽きっぽい",
      "ちょっとしたことで感動する","眉毛が太い","騙されやすい","虫が苦手","常にジャージ",
      "スカートが短い","人脈が広い","手が綺麗","くっつき虫","腐女子","ツイてない","かわいい",
      "男友達が多い","リアクションが大きい","返信が遅い","おばか","病弱","おしゃれ",
      "動物好き","うぶ","眼帯をしている","頼まれると断れない","病んでる"];//32
      if($p>=8){
        $q+=16;
      }$personality=$personalities[$q];

      $characters=["わがまま","不思議ちゃん","おっとり","寂しがり屋","サバサバ","真面目","明るい",
      "頑張り屋","ツンデレ","暗い","ぼんやり","怒りっぽい","お節介","不思議ちゃん","優しい","なまけもの"];//16
      $character=$characters[$o];

      $cup=($a0/12)**4+($a1/4)**2+$a2;
      if($cup<9){//AA
        $cup="AAカップ";
      }elseif($cup<11.5){//A
        $cup="Aカップ";
      }elseif($cup<14){//B
        $cup="Bカップ";
      }elseif($cup<16.5){//C
        $cup="Cカップ";
      }elseif($cup<19){//D
        $cup="Dカップ";
      }elseif($cup<21.5){//E
        $cup="Eカップ";
      }elseif($cup<24){//F
        $cup="Fカップ";
      }elseif($cup<26.5){//G
        $cup="Gカップ";
      }else{//H
        $cup="Hカップ以上";
      }

      // ((157.5-139)*2-31)/15=0.4
      // 140cm未満・175cm以上
      $height=round($a3*0.4+$a4+$a5+139);
      if($height<140){
        $height="140cm未満";
      }else if($height>=175){
        $height="175cm以上";
      }else{
        $height=$height."cm";
      }

      echo"<div class='resulttable'>";
      echo"<h2 class='resulttitle'><span style='display:inline-block'>{$name}さんを</span><span style='display:inline-block'>女子高生にすると</span></h2>";
      echo"<div class='resulttablecontainer'>";
      echo"<p>{$grade_th}年{$class_th}組 <b>{$name}</b>ちゃん</p>";
      echo"<p>髪…{$hair_color}色{$hair_quality}{$hair_length}</p>";
      echo"<p>目…{$eye_opening}</p>";
      echo"<p>身長…{$height}</p>";
      echo"<p>系統…{$party}系</p>";
      echo"<p>特徴…{$personality}</p>";
      echo"<p>性格…{$character}</p>";
      echo"<p>バスト…{$cup}</p>";
      echo"<p>得意科目…{$favorite_subject}</p>";
      echo"</div></div>";
      $url_name=urlencode($name);
    }
  ?>
  <p style="text-align:center">
    <a class="tweet-button" href="https://twitter.com/intent/tweet?text=<?php if(isset($_GET['name'])){
    echo urlencode("{$name}さんが女子高生になったら\n{$grade_th}年{$class_th}組 {$name}ちゃん\n髪…{$hair_color}{$hair_quality}{$hair_length}\n目…{$eye_opening}\n身長…{$height}\n系統…{$party}系\n特徴…{$personality}\n性格…{$character}\nバスト…{$cup}\n得意科目…{$favorite_subject}");
    }else{echo urlencode("あなたが女子高生になったら");}echo urlencode("\n#女子高生になってみたー");?>&url=<?php echo urlencode("https://jkinhelsinki.github.io/JKGenerator");if(isset($_GET['name'])){
    echo urlencode("?name={$url_name}");}
    ?>" target="_blank" rel="noopener noreferrer">ツイート</a>
  </p>
  <p>制作背景。同種のとても有名な診断メーカー製の「あなたを女子高生化してみたー」は結果が日替わり。その為、日をかえて回していけば好きな結果にすることが可能。そこで結果が固定される診断が欲しくなり作成しました。雀魂の牌山生成にも使われていたMD5ハッシュを利用。</p>
</body>
</html>
