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
                {!! Form::checkbox($name, $options['value'], $options['checked'], $options['attr']) !!}

                @if ($showLabel && $options['label'] !== false && $options['label_show'])
                    <div class="ml-3 text-sm">
                        {!! Form::customLabel($name, $options['label'], $options['label_attr']) !!}
                        @if(isset($options['info']))
                            <p class="text-gray-500 dark:text-gray-100">{{$options['info']}}</p>
                        @endif
                    </div>
                @endif

                @include(helpBlockPath())
            @endif

            @include(errorBlockPath())

            @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif

{{--<div class="flex items-start">--}}
{{--    <div class="flex items-center h-5">--}}
{{--        <input id="offers" name="offers" type="checkbox" class="white-radio-theme dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 dark:focus:shadow-outline-gray">--}}
{{--    </div>--}}
{{--    <div class="ml-3 text-sm">--}}
{{--        <label for="offers" class="font-medium text-gray-700 dark:text-gray-200 ">Offers</label>--}}
{{--        <p class="text-gray-500 dark:text-gray-100">Get notified when a candidate accepts or rejects an offer.</p>--}}
{{--    </div>--}}
{{--</div>--}}
