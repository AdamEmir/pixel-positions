{{--@php--}}
{{--    $classes = 'p-4 bg-white/10 rounded-xl border border-transparent hover:border-blue-600 group transition-colors duration-300';--}}
{{--@endphp--}}

{{--<div {{$attributes->merge(['class'=> $classes])}}>--}}
{{--    {{$slot}}--}}
{{--</div>--}}


<div {{$attributes->merge(['class'=>'p-4 bg-white/10 rounded-xl border border-transparent hover:border-blue-600 group transition-colors duration-300'])}}>
    {{$slot}}
</div>
