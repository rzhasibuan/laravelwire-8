<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    @foreach ($posts as $post)
        <div class="p-4 my-4 bg-white shadow-xl rounded-md">
            <div class="flex justify-between">
                <div class="flex items-center">
                    <img src="{{ $post->user->profile_photo_url }}" class="w-10 h-10 mr-3 rounded-full border" alt="{{ $post->user->name }}">

                    <span class="text-xl font-bold">{{ $post->user->name }}</span>
                    <span class="text-gray-500 px-1">{{ $post->created_at->diffForHumans() }}</span>
                    {{-- <button 
                        wire:click="showUpdateForm({{ $post->id }})"
                        class="bg-gray-500 p-2 mx-2 text-white rounded-lg hover:bg-gray-400 hover:shadow-lg transform-all duration-300">
                        Edit
                    </button>
                    <button
                    wire:click="deletePost({{ $post->id }})" 
                    class="bg-red-500 p-2 text-white hover:bg-red-400 rounded-lg hover:bg-gray-400 hover:shadow-lg transform-all duration-300">
                        Delete
                    </button> --}}
                </div>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                </svg>
            </a>
               
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
