<h1>create</h1>

<form action="{{route('content.save')}}" method="post">
    @csrf
    <h3>タイトル</h3>
    {{-- 下記を追記する --}}
    @if ($errors->has('title'))
        @foreach ($errors->get('title') as $title_errors)
            <p>{{$title_errors}}</p>
            <br>
        @endforeach
    @endif
    {{-- 上記までを追記する --}}
    <input type="text" name="title">
    <br>
    <h3>内容</h3>
    {{-- 下記を追記する --}}
    @if ($errors->has('detail'))
        @foreach ($errors->get('detail') as $detail_errors)
            <p>{{$detail_errors}}</p>
            <br>
        @endforeach
    @endif
    {{-- 上記までを追記する --}}
    <textarea name="detail" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="保存">
    <input type="button" onclick="location.href='{{ route('content.index') }}'" value="一覧に戻る">
</form>
