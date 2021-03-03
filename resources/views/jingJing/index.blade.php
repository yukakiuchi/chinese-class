@extends('layouts.jingJingLayout')

@section('title', 'jingjing-index')

@section('content')
	<div class="apperMainBar">
		<div class="addBtn"><a href="/jingJing/create/" class="addBtnATag">追加</a></div>
		<form method="post" action="jingJingSearch" class="search_container">
			<input type="text" size="25" placeholder="キーワード検索">
			<input type="submit" value="検索">
		</form>
	</div>

	<table>
	  <tr><th>ID</th> <th>タイトル</th> <th>質問数</th> <th>更新日</th> <th>管理</th><th>削除</th></tr>
	  <tr>
	    <td>1</td>
	    <td>中国語技能検定1</td>
	    <td>データ</td>
		<td>データ</td>
		<td><a href="jingJing/edit">編集</a></td>
		<td><button type="button">削除</button></td>
	  </tr>
	  <tr>
	    <td>2</td>
	    <td>中国語</td>
	    <td>データ</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
	  </tr>
	  <tr>
	    <td>3</td>
	    <td>昨日の復習</td>
	    <td>データ</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
	  </tr>
	  <tr>
	    <td>4</td>
	    <td>本日の</td>
	    <td>データ</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
	  </tr>
	  <tr>
		<td>4</td>
		<td>本日の</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
	  </tr>
	  <tr>
		<td>4</td>
		<td>本日の</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
	  </tr>
	  <tr>
		<td>4</td>
		<td>本日の</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
	  </tr>
	  <tr>
		<td>4</td>
		<td>本日の</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
	  </tr>
	  <tr>
		<td>4</td>
		<td>本日の</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
	  </tr>
	  <tr>
		<td>4</td>
		<td>本日の</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
		<td>データ</td>
	  </tr>
	</table>

@endsection
