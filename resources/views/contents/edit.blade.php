<h1>edit</h1>

<form action="{{ route('content.update', ['content_id' => $content['id']]) }}" method="post">
    @csrf
    <h3>id</h3>
    <p>{{$content['title']}}</p>
    <h3>タイトル</h3>
    <input type="text" name="title" value="{{$content['title']}}">
    <h3>内容</h3>
    <textarea name="detail" cols="30" rows="10">{{$content['detail']}}</textarea>
    <br>
    <input type="submit" value="保存">
    <input type="button" onclick="location.href='{{ route('content.index') }}'" value="編集をキャンセルして一覧に戻る">
</form>
