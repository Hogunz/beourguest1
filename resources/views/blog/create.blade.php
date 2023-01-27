<x-guest-layout>

    <div class="container mx-auto">
        <form class="px-96 p-2 ">
            <div class="border border-gray-400 ">
                <p class="border bg-gray-900 text-white p-2">Create Post</p>
                <div class="grid gap-6 mb-6 md:grid-cols-1 p-2">
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter title" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Select a Category</label>
                        <select class="rounded-lg w-full py-2 p-2 mb-4 border-none" name="" id="">
                            <option value="2">EVENT & NIGHTLIFE</option>
                            <option value="1">test1</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Content</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Image</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Tags</label>
                        <div class="flex items-center justify-center">
                            <input type="text" class="w-full px-4 py-6 text-sm border border-gray-300 rounded outline-none" name="tags" value="test, haha, tehehest" autofocus />
                        </div>
                    </div>
                </div>
                <div class="p-2 text-center">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
<link
      href="https://unpkg.com/@yaireo/tagify/dist/tagify.css"
      rel="stylesheet"
      type="text/css"
    />
<!-- TAGS -->
<script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <script>
      // The DOM element you wish to replace with Tagify
      var input = document.querySelector('input[name=tags]');
      // initialize Tagify on the above input node reference
      new Tagify(input);
    </script>