<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    @foreach ($posts as $post)
        <div class="p-4 my-4 bg-white shadow-xl rounded-md">
            <div class="flex justify-between">
                <div class="flex items-center">
                    <img src="{{ $post->user->profile_photo_url }}" class="w-10 h-10 mr-3 rounded-full border" alt="{{ $post->user->name }}">

                    <span class="text-xl font-bold">{{ $post->user->name }}</span>
                    <span class="text-gray-500 px-1">{{ $post->created_at->diffForHumans() }}</span>
                    <button 
                        wire:click="showUpdateForm({{ $post->id }})"
                        class=" p-2 mx-2 rounded-lg transform-all duration-300 hover:shadow-lg ring-2 ring-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                    </button>
                    <button
                    wire:click="deletePost({{ $post->id }})" 
                    class="p-2 hover:text-red-400 rounded-lg transform-all duration-300 hover:shadow-xl ring-2 ring-red-300 ">
                       <svg xmlns="http://www.w3.org/2000/svg" class="text-red-500 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
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
