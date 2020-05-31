@extends('base')

@section('content')
    <form action="{{ @route('create-job') }}"
          method="post">
        <label for="#counts">Кол-во вариантов</label>
        <input class="form-control"
               name="counts"
               min="1"
               max="100"
               value="1"
               id="#counts"
               type="number">
        @foreach($types as $type)
            <div class="form-check">
                <input class="form-check-input"
                       type="checkbox"
                       name="types[]"
                       value="{{ $type['id'] }}"
                       id="defaultCheck{{$type['id']}}">
                <label class="form-check-label"
                       for="defaultCheck{{$type['id']}}"> {{ $type['text'] }} </label>
            </div>
        @endforeach

        <button type="submit"
                class="btn btn-primary mb-2">Далее
        </button>
    </form>
@endsection
