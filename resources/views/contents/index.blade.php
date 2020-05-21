<h1>index</h1>

<input type="button" onclick="location.href='{{ route('content.create') }}'" value="コンテンツの新規登録">
<hr>
@foreach ($contents as $content)
    <h3>タイトル</h3>
    <p>{{$content['title']}}</p>
    <h3>内容</h3>
    <p>{{$content['detail']}}</p>
    <br>
    <input type="button" onclick="location.href='{{ route('content.detail', ['content_id' => $content['id']]) }}'" value="詳細">
    <input type="button" onclick="location.href='{{ route('content.edit', ['content_id' => $content['id']]) }}'" value="編集">
    <input type="button" onclick="location.href='{{ route('content.destroy', ['content_id' => $content['id']]) }}'" value="削除">
    <hr>
@endforeach