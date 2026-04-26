@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Articles</h1>

{{-- Filtre catégories --}}
<div class="flex gap-2 flex-wrap mb-6">
    <a href="{{ route('articles.index') }}"
       class="px-3 py-1 rounded-full text-sm {{ !request('categories') ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }}">
        Tous
    </a>
    @foreach($categories as $cat)
        <a href="{{ route('articles.index', ['categories' => $cat->id]) }}"
           class="px-3 py-1 rounded-full text-sm {{ request('categories') == $cat->id ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }}">
            {{ $cat->name }}
        </a>
    @endforeach
</div>

{{-- Liste articles --}}
<div class="grid gap-6">
    @forelse($articles as $article)
        <div class="bg-white p-5 rounded shadow">
            <div class="flex justify-between items-start">
                <h2 class="text-xl font-semibold">
                    <a href="{{ route('articles.show', $article) }}" class="hover:text-indigo-600">
                        {{ $article->title }}
                    </a>
                </h2>
                <span class="text-xs bg-indigo-100 text-indigo-700 px-2 py-1 rounded-full">
                    {{ $article->category->name }}
                </span>
            </div>
            <p class="text-gray-500 text-sm mt-1">
                {{ $article->published_at?->format('d/m/Y') }}
            </p>
            <p class="text-gray-600 mt-3">{{ $article->content }}</p>
            <a href="{{ route('articles.show', $article) }}"
               class="inline-block mt-3 text-indigo-600 text-sm hover:underline">
                Lire la suite →
            </a>
        </div>
    @empty
        <p class="text-gray-500">Aucun article trouvé.</p>
    @endforelse
</div>
<div class="mt-8">
    {{ $articles->withQueryString()->links() }}
</div>

@endsection