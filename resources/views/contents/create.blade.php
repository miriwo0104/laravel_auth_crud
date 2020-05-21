<h1>create</h1>

<form action="{{route('content.save')}}" method="post">
    @csrf
    <h3>タイトル</h3>
    <input type="text" name="title">
    <br>
    <h3>内容</h3>
    <textarea name="detail" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="保存">
    <input type="button" onclick="location.href='{{ route('content.index') }}'" value="一覧に戻る">
</form>
