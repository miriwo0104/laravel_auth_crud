<h1>detail</h1>


<h3>id</h3>
<p>{{$content['id']}}</p>
<h3>タイトル</h3>
<p>{{$content['title']}}</p>
<h3>内容</h3>
<p>{{$content['detail']}}</p>
<br>
<input type="button" onclick="location.href='{{ route('content.index') }}'" value="一覧に戻る">
<input type="button" onclick="location.href='{{ route('content.edit', ['content_id' => $content['id']]) }}'" value="編集">
<input type="button" onclick="location.href='{{ route('content.destroy', ['content_id' => $content['id']]) }}'" value="削除">
