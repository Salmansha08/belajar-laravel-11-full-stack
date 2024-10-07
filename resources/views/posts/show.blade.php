<x-layout>
  <section>
    <div class="flex justify-end">
      <div class="flex justify-between">
        <a href="{{ route('posts.edit', $post->id) }}"
          class="mb-2 me-2 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Edit
        </a>
        <form action="{{ route('posts.destroy', $post->id)}}" method="POST">
          @csrf
          @method("DELETE")
          <button type="submit" class="mb-2 me-2 rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            Delete
          </button>
        </form>
      </div>
    </div>
  </section>
  <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-8 py-8 bg-slate-200 rounded-lg">
    <h1 class="text-3xl text-blue-900 font-semibold">{{ $post->title }}</h1>
    <main class="max-w-6xl mx-auto mt-8 space-y-6">
      <p class="text-gray-700 p-4 mb-4">{{ $post->content }}</p>
    </main>
  </div>
</x-layout>