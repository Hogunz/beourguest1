<x-guest-layout>
<div class="container mx-auto">

<div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                   No.
                </th>
                <th scope="col" class="py-3 px-6">
                   Title
                </th>
                <th scope="col" class="py-3 px-6">
                   Content
                </th>
                <th scope="col" class="py-3 px-6">
                   Category
                </th>
                <th scope="col" class="py-3 px-6">
                 Action
                </th>
                <th scope="col" class="py-3 px-6">
                   Feature
                </th>
                
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  1
                </th>
                <td class="py-4 px-6">
                  Sample title
                </td>
                <td class="py-4 px-6">
                    asdasdasdasd
                </td>
                <td class="py-4 px-6">
                  EVENT
                </td>
                <td class="py-4 px-6">
               <button class="border px-6 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-black hover:text-white">Show</button>
               <button class="border px-6 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-black hover:text-white">Edit</button>
               <button class="border px-6 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-black hover:text-white">Delete</button>
                </td>
                <td class="py-4 px-6">
                <button class="border px-6 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-black hover:text-white">Feature</button>
                </td>
            </tr>
            <a href="/blog/post/create" class="href">
          <x-button class="mb-2">Add post</x-button>
          </a>
        </tbody>
    </table>
</div>
</div>
</x-guest-layout>