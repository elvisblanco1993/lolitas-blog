<x-guest-layout>
    {{-- Menu --}}
    @include('layouts.navbar')
    <div class="max-w-7xl mx-auto">

        {{-- Content --}}
        <div class="my-12 px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-4 gap-8">

                @forelse ($articles as $article)
                    @if ( $loop->first )
                        <a
                            href="{{ route('articles.view', ['article' => $article->slug]) }}"
                            class="col-span-4 h-64 sm:h-96 flex items-end justify-center bg-cover bg-center bg-no-repeat rounded-lg grayscale hover:grayscale-0 transition-all duration-100"
                            style="background-image: url({{asset('images/'.$article->image)}})">

                            <h2 class="inline-flex px-4 bg-black text-2xl sm:text-3xl text-white mb-4">
                                {{ $article->title }}
                            </h2>

                        </a>
                    @else
                        <a
                            href="{{ route('articles.view', ['article' => $article->slug]) }}"
                            class="col-span-4 sm:col-span-2 h-64 sm:h-72 flex items-end justify-center bg-cover bg-center bg-no-repeat rounded-lg grayscale hover:grayscale-0 transition-all duration-100"
                            style="background-image: url({{asset('images/'.$article->image)}})">

                            <h2 class="inline-flex px-4 bg-black text-2xl sm:text-3xl text-white mb-4">
                                {{ $article->title }}
                            </h2>

                        </a>
                    @endif
                @empty

                @endforelse
                <div class="col-span-3">
                    {{$articles->links()}}
                </div>

            </div>
        </div>
    </div>

</x-guest-layouit>
