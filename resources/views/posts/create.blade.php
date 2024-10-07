<x-layout>
  <x-header>
    Post Create Page
  </x-header>
  <div class="mx-auto max-w-2xl rounded-lg bg-slate-200 px-4 py-8 dark:bg-slate-800 sm:px-6 lg:px-8">
    <form method="POST" action="{{ route('posts.store') }}">
      @csrf
      <div class="mb-5">
        <label for="base-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Title</label>
        <input type="text" id="base-input" name="title"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
        @if ($errors->has('title'))
            <p class="text-red-500 text-xs mt-1">{{ $errors->first('title') }}</p>
        @endif
    </div>
    
    <div class="mb-5">
        <label for="message" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Content</label>
        <textarea id="message" rows="4" name="content"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
            placeholder="Write your content here..."></textarea>
        @if ($errors->has('content'))
            <p class="text-red-500 text-xs mt-1">{{ $errors->first('content') }}</p>
        @endif
    </div>

    <div class="mb-5">
      <button type="submit"
        class="mb-2 me-2 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Store</button>
    </div>
    </form>
  </div>
</x-layout>
