<x-app-layout>
    @foreach ($data as $item)
        @dump($item)
    @endforeach
</x-app-layout>