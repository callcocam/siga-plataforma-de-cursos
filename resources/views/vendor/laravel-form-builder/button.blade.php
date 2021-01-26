{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
@if ($options['wrapper'] !== false)
    <div {!! $options['wrapperAttrs'] !!}>
        @endif

        {!! Form::button($options['label'], $options['attr']) !!}
        @include(helpBlockPath())

        @if ($options['wrapper'] !== false)
    </div>
@endif
