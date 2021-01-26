{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}

@if ($showStart)
    {!! Form::open($formOptions) !!}
@endif
@if ($showFields)
    @foreach ($fields as $field)
        @if( ! in_array($field->getName(), $exclude) )
            {!! $field->render() !!}
        @endif
    @endforeach
@endif
@if ($showEnd)
    {!! Form::close() !!}
@endif
