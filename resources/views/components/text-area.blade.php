@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} rows="3" {!! $attributes->merge(['class' => 'border-gray-300 focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm']) !!}></textarea>
