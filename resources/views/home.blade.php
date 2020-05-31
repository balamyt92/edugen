@extends('base')

@section('content')
    <h1>Введите текст</h1>
    <form action="{{ @route('save-text') }}"
          method="post">
        <div class="form-group">
            <label for="text">Текст</label>
            <textarea class="form-control"
                      name="text"
                      id="text"
                      rows="25">{{ $text }}</textarea>
        </div>
        <button type="submit"
                class="btn btn-primary mb-2">Далее
        </button>
    </form>
@endsection
