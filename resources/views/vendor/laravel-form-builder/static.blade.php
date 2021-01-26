{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!}>
            @endif
            @endif

            @if ($showLabel && $options['label'] !== false && $options['label_show'])
                {!! Form::customLabel($name, $options['label'], $options['label_attr']) !!}
            @endif

            @if ($showField)
                <{{$options['tag']}} {!! $options['elemAttrs'] !!}>{{ e($options['value']) }}</{{$options['tag']}}>
                @include(helpBlockPath())
            @endif

        @if ($showLabel && $showField)
        @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
