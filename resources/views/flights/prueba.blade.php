<x-app-layout>
    @foreach ($data['data'] as $item)
        @dump($item['duration'])        
    @endforeach
</x-app-layout>