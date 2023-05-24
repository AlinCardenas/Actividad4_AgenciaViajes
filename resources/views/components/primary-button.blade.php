<div class="flex justify-center my-4">
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-black px-5 py-2 rounded-md font-semibold hover:bg-gray-800']) }}>
      {{$slot}}
    </button>
</div>
