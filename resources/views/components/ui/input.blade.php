@props([
    'classSize' => [
        'xs' => ' rounded-xs p-2 ',
        'sm' => ' rounded-sm p-3 ',
        'md' => ' rounded-md p-4 ',
    ]
])

@php
$class= ($errors->has($key))
? ' ring ring-danger focus:ring-danger ring-opacity-75 '
: '';
@endphp

<div class="relative my-2">

    <input {{ $attributes->merge([
        'class' => 'pr-16 placeholder-gray-500 border focus:ring focus:ring-gray-200 outline-none ' . $class . $classSize[$size],
        'name'  => $key])
    }}>

    @if ($key)
        @error($key)
            <x-icon-alert-circle-outline class="absolute inset-0 w-10 h-10 my-auto ml-auto mr-4 text-danger" />
        @enderror
    @endif

</div>

@section('suggestPanel')
Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cum officiis facere laborum labore doloribus aliquid
quam! Blanditiis neque quam cum, quae, quaerat minima odio eos velit error iusto magni.
@endsection
