@if(data_get($setUp, 'header.searchInput'))
    <div class="flex flex-row mt-2 md:mt-0 w-full rounded-full justify-start sm:justify-center md:justify-end">
        <div class="relative rounded-full w-full float-end float-right md:w-full lg:w-1/2">
              <span class="absolute inset-y-0 left-0 flex items-center pl-1">
                 <span class="p-1 focus:outline-none focus:shadow-outline">
                    <x-livewire-powergrid::icons.search class="text-slate-300 dark:text-slate-200"/>
                 </span>
              </span>
            <input wire:model.debounce.600ms="search" type="text"
                   style="padding-left: 36px !important;"
                   class="block w-full float-right text-slate-700 border border-slate-300 rounded-full py-2 px-3 leading-tight focus:outline-none focus:border-slate-500 pl-10 dark:bg-slate-600 dark:text-slate-200 dark:placeholder-slate-200 dark:border-slate-500"
                   placeholder="{{ trans('livewire-powergrid::datatable.placeholders.search') }}">
            @if($search)
                <span class="absolute inset-y-0 right-0 flex items-center pl-1">
                    <span class="p-1 focus:outline-none focus:shadow-outline cursor-pointer">
                        <a wire:click.prevent="$set('search','')">
                            <x-livewire-powergrid::icons.x class="text-slate-300 mr-2 w-5 h-5 dark:text-slate-200"/>
                        </a>
                    </span>
                </span>
            @endif
        </div>
    </div>
@endif
