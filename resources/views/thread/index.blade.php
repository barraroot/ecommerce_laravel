@extends('layouts.default')

@section('content')
<div class="container">
    <h3>{{ __('Most recent threads') }}</h3>
    <thread-component
        title="{{ __('Threads') }}"
        thread="{{__('Thread')}}"
        reply="{{__('Reply')}}"
        open="{{__('Open')}}"
        newtitle="{{__('New Thread')}}"
        threadtitle="{{__('New Title')}}"
        threadbody="{{__('New Content')}}"
        send="{{__('Send')}}"
    >
        @include('layouts.default.preloader')
    </thread-component>
</div>
@endsection

@section('scripts')
    <script src="/js/threads.js"></script>
@endsection
