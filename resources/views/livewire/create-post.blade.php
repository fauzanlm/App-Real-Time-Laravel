<div class="py-4 px-4">
    <textarea placeholder="Post something..." wire:model="body" cols="" rows="3" class="appearance-none w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:shadow-outline sm:text-sm"></textarea>
    
    <div class="flex justify-end">
        <button 
            wire:click="createPost" 
            class="bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4 mt-2 rounded-md">
            Post
        </button>
    </div>
</div>
