<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            投稿一覧
        </h2>
    </x-slot>
    <div class="py-12 bg-gray-500" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container md:px-5 mx-auto">
                            <div class="w-full mx-auto overflow-auto">
                            <x-flash-message status="session('status')"/>
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                              <thead>
                                <tr>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">日付</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">収支</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">大項目</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">中項目</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">金額</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">コメント</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作成日</th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                    <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td class="md:px-4 py-3">{{ $post->day }}</td>
                                    <td class="md:px-4 py-3">{{ $post->selection }}</td>
                                    <td class="md:px-4 py-3">{{ $post->main }}</td>
                                    <td class="md:px-4 py-3">{{ $post->sub }}</td>
                                    <td class="md:px-4 py-3">{{ $post->amount }}</td>
                                    <td class="md:px-4 py-3">{{Str::limit($post->comment, 20, '(…)' )}}</td>
                                    <td class="md:px-4 py-3">{{ $post->created_at->diffForHumans() }}</td>
                                    <td class="md:px-4 py-3">
                                    <button onclick="location.href='{{ route('post.edit', ['post' => $post->id ])}}'" class=" text-white bg-indigo-400 border-0 md:py-2 px-4 focus:outline-none hover:bg-indigo-500 rounded ">編集</button>
                                    </td>
                                    <form id="delete_{{$post->id}}" method="POST" action="{{ route('post.destroy', ['post' => $post->id ])}}">
                                    @csrf
                                    @method('DELETE')
                                    <td class="px-4 py-3">
                                        <a href="#" data-id="{{ $post->id }}" onclick="deletePost(this)" class=" text-white bg-red-400 border-0 py-2 px-4 focus:outline-none hover:bg-red-500 rounded ">削除</a>
                                    </td>
                                    </form>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            {{ $posts->links() }}
                          </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e) {
        'use strict';
        if (confirm('本当に削除してもいいですか?')) {
        document.getElementById('delete_' + e.dataset.id).submit();
        }
        }
    </script>
</x-app-layout>
