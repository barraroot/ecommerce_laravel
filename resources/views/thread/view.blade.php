@extends('layouts.default')

@section('content')
<div class="container">
    <reply-component
    reply="{{__('Reply')}}"
    replied="{{__('Replied')}}"
    your-answer="{{__('Your Answer')}}"
    send="{{__('Send')}}"
    >
        @include('layouts.default.preloader')
    </reply-component>
</div>
@endsection

@section('scripts')
    <script src="/js/replies.js"></script>
@endsection
