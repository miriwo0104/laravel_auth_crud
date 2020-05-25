<h1>create</h1>

<form action="{{route('content.save')}}" method="post">
    @csrf
    <h3>タイトル</h3>
    @if ($errors->has('title'))
        <!-- 配列$errorsのキー'title'に格納されているメッセージを行っこづつ変数$input_content_errorに格納する -->
        @foreach ($errors->get('title') as $title_errors)
            <!-- 変数$input_content_errorを出力する -->
            <p>{{$title_errors}}</p>
            <br>
        @endforeach
    @endif
    <input type="text" name="title">
    <br>
    <h3>内容</h3>
    @if ($errors->has('detail'))
        <!-- 配列$errorsのキー'detail'に格納されているメッセージを行っこづつ変数$input_content_errorに格納する -->
        @foreach ($errors->get('detail') as $detail_errors)
            <!-- 変数$input_content_errorを出力する -->
            <p>{{$detail_errors}}</p>
            <br>
        @endforeach
    @endif
    <textarea name="detail" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="保存">
    <input type="button" onclick="location.href='{{ route('content.index') }}'" value="一覧に戻る">
</form>
