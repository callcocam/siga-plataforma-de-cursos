<!--/**-->
<!-- * Created by Claudio Campos.-->
<!-- * User: callcocam@gmail.com, contato@sigasmart.com.br-->
<!-- * https://www.sigasmart.com.br-->
<!-- */-->

@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!}>
            @endif
            @endif

            @if ($showLabel && $options['label'] !== false && $options['label_show'])
                {!! Form::customLabel($name, $options['label'], $options['label_attr']) !!}
            @endif

            @if ($showField)
                @php $emptyVal = $options['empty_value'] ? ['' => $options['empty_value']] : null @endphp
                {!! Form::select($name, (array)$emptyVal + $options['choices'], $options['selected'], $options['attr']) !!}
                @include(helpBlockPath())
            @endif

            @include(errorBlockPath())

            @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
