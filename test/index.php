<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ToDoリスト 入力ページ</title>
<style type="text/css">
	body {
		background-color: #f9fff2;
	}
	.input-area {
		margin-bottom: 20px;
	}
	input[type="text"],input[type="email"],select {
		width: 300px;
		height: 30px;
	}
	textarea {
		width: 300px;
	}
	p {
		font-weight: bold;
		font-size: 20px;
	}
	.btn-border {
		display: inline-block;
		max-width: 180px;
		text-align: left;
		border: 2px solid #9ec34b;
		font-size: 15px;
		color: #9ec34b;
		text-decoration: none;
		font-weight: bold;
		padding: 8px 16px;
		border-radius: 4px;
		transition: .4s;
	}
	.btn-border:hover {
		background-color: #9ec34b;
		border-color: #cbe585;
		color: #FFF;
	}
</style>
</head>
<body>
 	<form action="complete.php" method="post">
 		<h2>ToDoリスト 入力ページ</h2>
	 	<div class="input-area">
		 	<p>予定タイトル</p>
		 	<input type="text" name="todo_title" placeholder="例）買い物" required>
		</div>

		<div class="input-area">
		 	<p>優先度</p>
		 	<label><input type="radio" name="yusen" value="高" checked>高</label>
		 	<label><input type="radio" name="yusen" value="中">中</label>
		 	<label><input type="radio" name="yusen" value="低">低</label>
	 	</div>

	 	<div class="input-area">
		 	<p>予定の種類</p>
		 	<select name="syubetsu" required>
		 		<option value="">-選択-</option>
		 		<option value="仕事">仕事</option>
		 		<option value="外出">外出</option>
		 		<option value="勉強">勉強</option>
                <option value="勉強">その他</option>
		 	</select>
	 	</div>

		<div class="input-area">
	 		<p>予定詳細</p>
	 		<textarea name="todo_body" rows="5" placeholder="例）具体的な内容を記載" required></textarea>
		</div>

	 	<div class="input-area">
	 		<input type="submit" name="submit" value="送信" class="btn-border">
	 	</div>
	</form>
</body>
</html>