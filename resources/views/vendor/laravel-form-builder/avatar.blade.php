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
                <div class="flex items-center mt-2">
                  <span class="inline-block w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
                        @if ($avatar)
                          <img id="picture" src="{{ $options['value'] }}" alt="{{ _('Change select image')}}">
                          <img src="{{ $avatar->temporaryUrl() }}">
                        @endif

                  </span>
                    <label  class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white rounded-md shadow-sm cursor-pointer dark:bg-gray-900 border2gray-300 borader dark:text-gry-100 hover:bg-gray-50 dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ _('Change select image')}}
                        {!! Form::file($name, $options['attr']) !!}
                        @include(helpBlockPath())

                    </label>
                </div>
            @endif
            @include(errorBlockPath()) @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
