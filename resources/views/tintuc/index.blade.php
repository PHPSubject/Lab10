@extends('layout')

@section('title', 'Danh sách tin tức')
@section('content')
<h1 class="h3 mb-4">Danh sách tin tức</h1>
@if($dsTin->isEmpty())
<div class="alert alert-info">Chưa có bài viết.</div>
@else
<div class="row g-4">
    @foreach($dsTin as $tin)
    <div class="col-md-6 col-lg-4">
        <x-news.card :tin="$tin" />
    </div>
    @endforeach
</div>
<div class="mt-4 d-flex justify-content-center">
    {{ $dsTin->links() }}
</div>
@endif
@endsection