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

            @if ($showField)
                {!! $options['children']['first']->render([], true, true, false) !!}
                {!! $options['children']['second']->render([], true, true, false) !!}

                @include(helpBlockPath())

            @endif

            @if ($showError && isset($errors))
                {!! $options['children']['first']->render([], false, false, true) !!}
                {!! $options['children']['second']->render([], false, false, true) !!}
            @endif

            @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
