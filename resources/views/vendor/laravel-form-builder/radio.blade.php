{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!} >
            @endif
            @endif
            @if ($showField)
                {!! Form::radio($name, $options['value'], $options['checked'], $options['attr']) !!}

                @if ($showLabel && $options['label'] !== false && $options['label_show'])
                    {!! Form::customLabel($name, $options['label'], $options['label_attr']) !!}
                @endif

                @include(helpBlockPath())
            @endif

            @include(errorBlockPath())

            @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
