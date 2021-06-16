<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    @foreach ($posts as $post)
        <div class="p-4 my-4 bg-white shadow-xl rounded-md">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <div>
                <span>{{ $post->body }}</span>
            </div>
        </div>
    @endforeach
</div>
