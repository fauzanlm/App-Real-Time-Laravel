<div>
    @foreach ($posts as $post)
        <div class="px-4 py-4 mt-4 bg-white shadow-xl rounded-md">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                @if ($post->created_at != $post->updated_at)
                    <span class="text-gray-600">updated {{ $post->updated_at->diffForHumans() }}</span>
                @else
                    <span class="text-gray-600">posted {{ $post->created_at->diffForHumans() }}</span>
                @endif
                @if ($post->user_id == Auth::user()->id)
                    <button wire:click="showUpdateForm({{$post->id}})" style="hover{text-decoration:underline}" class="text-blue-500 no-underline ">edit</button>
                    <button wire:click="delete({{$post->id}})" style="hover{text-decoration:underline}" onclick="return confirm('Apakah Yakin?') || event.stopImmediatePropagation()" class="text-red-500 no-underline ">delete</button>
                @endif
            </div>
            <div>
                @if ($updateStateId != $post->id)
                    <span>{{ $post->body }}</span>
                @elseif($updateStateId == $post->id)
                    <textarea placeholder="Post something..." wire:model="body" cols="" rows="3" class="appearance-none w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:shadow-outline sm:text-sm"></textarea>
                    <button 
                        wire:click="update({{ $post->id }})" 
                        class="bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4  rounded-md">
                        Save
                    </button>
                    <button 
                        wire:click="closeUpdateForm" 
                        class="bg-red-500 hover:bg-red-600 text-white py-2 px-4  rounded-md">
                        Cancel
                    </button>
                    
                @endif
            </div>
        </div>
    @endforeach
</div>
