@props(['label', 'value'])

<div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
    <div>
        <p class="text-xs text-gray-500">{{ $label }}</p>
        <p class="text-base font-medium text-gray-800">{{ $value }}</p>
    </div>
</div>
