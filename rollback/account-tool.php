<!DOCTYPE html>
<html lang="ja">
    <head>
	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ▼jQuery本体 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!-- Bootstrap -->
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
		<script src="../js/bootstrap.min.js"></script>
        <!-- ▼バリデーション -->
        <script type="text/javascript" src="check.js"></script>
        <script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
        <script src="../js/languages/jquery.validationEngine-ja.js" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="css/validationEngine.jquery.css">	
        <title>番号登録</title>
    </head>

    <body>
	<!-- 1.ナビゲーションバーの設定 -->
	<nav class="navbar navbar-default navbar-inverse">
		<div class="container">
			<!-- 2.ヘッダ情報 -->
			<div class="navbar-header">
				<a href="#" class="navbar-brand"><img src="logo_qloog.gif"></a>
			</div>
			<!-- 3.リストの配置 -->
			<ul  class="nav navbar-nav">
				<li class="active"><a href="#">アカウント追加</a></li>
				<li><a href="#">閲覧</a></li>
            	<li><a href="#">検索</a></li>
			</ul>
			<!-- 4.ボタン -->
			<button type="button" class="btn btn-default navbar-btn">
            <span class="glyphicon glyphicon-envelope"></span>
        	</button>
		</div>
	</nav>

	<div class="container-fluid">
        <h2 class="page-header">GW DBへのアカウント追加</h2>
	<!-- ▼フォーム -->
        <form id="form_1" name="input" action="./form.php" method="POST">
            <p><b>データベースを選択してください</b></p>
            <div class="radio"><label><input type="radio" class="validate[required]" name="gw" id="radio1" value="asterisk">SB GW1(asterisk)</label></div>
            <div class="radio"><label><input type="radio" class="validate[required]" name="gw" id="radio2" value="asterisk_sb">SB GW2(asterisk_sb)</label></div>
            <div class="radio"><label><input type="radio" class="validate[required]" name="gw" id="radio3" value="asterisk_sb3">SB GW3(asterisk_sb3)</label></div>
            <div class="radio"><label><input type="radio" class="validate[required]" name="gw" id="radio4" value="asterisk_ncom">N-COM GW(asterisk_ncom)</label></div> 
            <div class="radio"><label><input type="radio" class="validate[required]" name="gw" id="radio5" value="asterisk_ncom_u">ウミガメ N-COM GW(asterisk_ncom)</label></div><br>
	    <label>"00" + 下番号を入力</label>
            <input type="text" name="name" value="00" class="validate[required,custom[phone_name],minSize[12],maxSize[12]]">
            <label>表示番号を入力</label>
            <input type="text" name="setvar" class="validate[required,,custom[phone_outnum],minSize[10],maxSize[11]]">
            <label>パスワードを入力</label>
            <input type="button" value="自動生成" onclick="getPassword();">
            <input type="text" name="secret" id="result" class="validate[required]">
            <br><br>
            <input type="submit" name="" id="btn_submit">
        </form>
	</div>
    </body>
</html>
