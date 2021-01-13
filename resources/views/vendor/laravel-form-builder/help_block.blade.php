{{--/**--}}
{{-- * Created by Claudio Campos.--}}
{{-- * User: callcocam@gmail.com, contato@sigasmart.com.br--}}
{{-- * https://www.sigasmart.com.br--}}
{{-- */--}}
@if ($options['help_block']['text'] && !$options['is_child'])
    <{{$options['help_block']['tag']}} {!! $options['help_block']['helpBlockAttrs'] !!}>
    {{ $options['help_block']['text']}}
    </{{$options['help_block']['tag']}}>
@endif
