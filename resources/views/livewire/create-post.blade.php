<div class="p-4">
    {{-- Do your work, then step back. --}}
    {{ $body }}
    <textarea 
    wire:model="body" 
    rows="3" 
    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" 
    placeholder="enter your post here..."></textarea>
    <div class="flex justify-start">
        <button
        wire:click="createPost"
        class="px-4 py-2 m-1 bg-blue-600 text-white hover:bg-blue-500 rounded-md">Post</button>
    </div>
</div>
