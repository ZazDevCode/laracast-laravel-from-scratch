@props(['comment'])
    <x-panel class="bg-gray-50">
        <article class="flex space-x-4">
            <div style="flex-shrink: 0">
                <img src="https://i.pravatar.cc/60?u={{ $comment->author->id }}" width="60" height="60" alt="" class="rounded-xl">
            </div>
            <div>
                <header class="mb-4">
                    <h3 class="font-bold">{{ $comment->author->username }}</h3>
                    <p class="text-xs">
                        Posted
                        <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time>
                    </p>
                </header>
                <p>
                    {{ $comment->body }}
                </p>
            </div>
        </article>
    </x-panel>