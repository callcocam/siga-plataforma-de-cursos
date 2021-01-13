{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
@if ($showLabel && $showField)
    @if ($showLabel && $options['label'] !== false && $options['label_show'])
        {!! Form::customLabel($name, $options['label'], $options['label_attr']) !!}
    @endif
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!}>
            @endif
            @endif
            <div class="space-y-1 text-center">
                <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                     aria-hidden="true">
                    <path
                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="flex text-sm text-gray-600">
                    @if ($showField)
                        <label for="file-upload"
                               class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer dark:bg-gray-900 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>{{ _('Upload a file') }}</span>
                            {!! Form::file($name, $options['attr']) !!}
                        </label>
                        <p class="pl-1">{{ _('or drag and drop') }}</p>
                        @include(helpBlockPath())
                    @endif
                    @include(errorBlockPath())
                </div>
                @if(isset($options['description']))
                    <p class="text-xs text-gray-500 dark:text-gray-100">
                        {{ $options['description'] }}
                    </p>
                @endif
            </div>
            @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
