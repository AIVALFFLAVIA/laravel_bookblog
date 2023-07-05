<x-layout>

    <x-setting heading="Manage Posts">


    <div class="px-4 sm:px-6 lg:px-8">
  
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <table class="min-w-full divide-y divide-gray-300">
         
          <tbody class="divide-y divide-gray-200 bg-white">
            @foreach ($posts as $post)
            <tr>

              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                    <div class="font-medium text-gray-900">
                    <a href="/posts/{{$post->slug}}">
                    {{$post->title}}
                    </a>
                </div>
                </div>
              </td>


              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="/admin/posts/{{$post->id}}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
              </td>

              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
              

                <form method="POST" action="/admin/posts/{{$post->id}}">
                    @csrf 
                    @method('DELETE')

                    <button class=" text-red-400">Delete</button>

                </form>
              </td>

            </tr>
            @endforeach

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    

    </x-setting>


    
</x-layout>