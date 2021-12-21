<div>
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50 text-center text-sm font-bold">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-28">
                  Id
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ __('Name') }}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ __('Email') }}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs text-gray-500 uppercase tracking-wider">
                  {{ __('Role') }}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs text-gray-500 uppercase tracking-wider">
                  {{ __('Post') }}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs text-gray-500 uppercase tracking-wider">
                  {{ __('Phone') }}
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Editar</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 text-sm">
              @foreach ($users as $item)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">{{ $item->id }}</td>
                  <td class="px-6 py-4">{{ $item->name }}</td>
                  <td class="px-6 py-4">{{ $item->email }}</td>
                  <td class="px-6 py-4">{{ $item->role->name }}</td>
                  <td class="px-6 py-4">
                    @foreach($item->posts as $key => $entry)
                      {{ $entry->title }}
                    @endforeach
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">{{ $item->phone }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                      <i class="fas fa-edit"></i>
                    </a>
                    
                    @if ($item->posts->count() === 0)
                      <a href="#" class="text-red-600 hover:text-red-900" wire:loading.attr="disabled" title="Eliminar">
                        <i class="fas fa-trash mr-2"></i>
                      </a>
                    @endif
                
                    {{-- @if ($item->posts->count() === 0)
                      <a href="javascript:void(0)" class="text-red-600 hover:text-red-900" wire:click="confirm('delete', {{ $item->id }})" wire:loading.attr="disabled" title="Eliminar">
                        <i class="fas fa-trash mr-2"></i>
                      </a>
                    @endif --}}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

          <div class="px-4 mt-4">
            {{$users->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>