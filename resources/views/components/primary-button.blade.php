<div class="flex justify-center my-4">
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white dark:bg-gray-900 px-5 py-2 rounded-md font-semibold hover:bg-gray-800']) }}>
      {{$slot}}
    </button>
</div>
