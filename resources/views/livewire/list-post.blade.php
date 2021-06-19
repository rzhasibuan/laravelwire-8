<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    @foreach ($posts as $post)
        <div class="p-4 my-4 bg-white shadow-xl rounded-md">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
                <button 
                    wire:click="showUpdateForm({{ $post->id }})"
                    class="bg-gray-500 p-2 text-white rounded-sm hover:bg-gray-400">
                    Edit
                </button>
                <button
                wire:click="deletePost({{ $post->id }})" 
                class="bg-red-500 p-2 text-white hover:bg-red-400 rounded-sm">
                    Delete
                </button>
            </div>
            <div>
                @if ($updateSteteId !== $post->id)
                <span>{{ $post->body }}</span>
                @endif

                @if ($updateSteteId === $post->id)
                <textarea 
                wire:model="body" 
                rows="3" 
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" 
                ></textarea>
                <button
                wire:click="updatePost({{ $post->id }})"
                class="px-4 py-2 m-1 bg-blue-600 text-white hover:bg-blue-500 rounded-md">
                    save
                </button>
                @endif
            </div>
        </div>
    @endforeach
</div>
