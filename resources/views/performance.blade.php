<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('社員パフォーマンス') }}
            </h2>

        </div>
    </x-slot>

    <div class="grid gap-8">

        <div class="p-6 flex flex-col gap-6 overflow-hidden bg-white rounded-md shadow-md lg:flex-row  dark:bg-dark-eval-1">
            <div class="col-span-3 sm:col-span-2">
                <x-label for="date" value="{{ __('日付') }}" />
                <x-input-with-icon-wrapper>
                    <x-slot name="icon">
                        <x-heroicon-o-user-circle aria-hidden="true" class="w-5 h-5" />
                    </x-slot>
                    <x-datepicker withicon id="datepicker" class="block w-full mt-1" type="text" name="date" value="{{request('date')}}" autocomplete="do-not-autofill"/>
                    {{-- <input id="datepicker" datepicker datepicker-autohide datepicker-buttons datepicker-format="yyyy-mm-dd"  type="text"  name="date" value="{{request('date')}}" autocomplete="do-not-autofill"
                                        class="w-44 text-md input input-bordered border border-primary rounded-lg hover:border-mold focus:ring-mold focus:ring-mold block pl-10 p-2.5" placeholder=""> --}}
                {{--  <x-input withicon id="user_code" class="block w-full" type="text" name="user_code"
                        :value="old('user_code')" placeholder="{{ __('User Code') }}" required autofocus /> --}}
                </x-input-with-icon-wrapper>
                {{-- <x-input id="email" type="text" class="block w-full mt-1" wire:model.defer="state.email" /> --}}
            </div>

            <div class="col-span-3 sm:col-span-2">
                <x-label for="line" value="{{ __('ライン') }}" />
                <x-input-with-icon-wrapper>
                    <x-slot name="icon">
                        <x-icon-queque aria-hidden="true" class="mt-1 w-5 h-5" />
                    </x-slot>

                    <div  class="">
                        <select id="group" class="pl-11 pr-8 py-2 inline-flex mt-1 w-full border border-gray-400 focus:border-gray-400
                        block w-full items-center rounded-md
                        focus:outline-none focus:ring focus:ring-blue-500 focus:border-gray-400 focus:ring
                        focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white
                        dark:focus:ring-offset-dark-eval-1 dark:text-gray-300 dark:border-gray-600 dark:bg-dark-eval-1
                        " name="group" value="{{request('group')}}">
                            <option  value="3001">塗装かけ</option>
                            <option value="3003">塗装おろし(01～10ライン)</option>
                            <option value="3004">塗装おろし(12～13ライン)</option>
                            <option value="4003">組付おろし(11ライン)</option>
                            <option value="5000">洗浄</option>

                        </select>
                    </div>


                </x-input-with-icon-wrapper>

            </div>


            <div class="col-span-3 sm:col-span-2">
                <x-label value="tes" class="invisible"/>
                <x-button wire:loading.attr="disabled" class="mt-1">
                    {{ __('検索') }}
                </x-button>
            </div>
        </div>

        <div class="p-6 flex flex-col gap-6 overflow-hidden bg-white rounded-md shadow-md lg:flex-row  dark:bg-dark-eval-1">
            <table class="table w-full text-left justify-between">
                <thead class="text-gray-300 sm:text-sm md:text-sm uppercase bg-blue-500 ">
                    <tr>
                        <th scope="col" class="p-2 w-fit rounded-tl-lg">{{ __('作業者名1') }}</th>
                        <th scope="col" class="p-2 w-fit">{{ __('作業者名2') }}</th>
                        <th scope="col" class="p-2 w-fit ">{{ __('作業者名3') }}</th>
                        <th scope="col" class="p-2 w-fit">{{ __('開始時間') }}</th>
                        <th scope="col" class="p-2 w-fit">{{ __('終了時間') }}</th>
                        <th scope="col" class="p-2 w-fit">{{ __('生産時間合計') }}</th>
                        <th scope="col" class="p-2 w-fit">{{ __('ハンガー数') }}</th>
                        <th scope="col" class="p-2 w-fit">{{ __('生産時間／ハンガー') }}</th>
                        <th scope="col" class="p-2 w-fit">{{ __('全箱数') }}</th>
                        <th scope="col" class="p-2 w-fit">{{ __('生産時間／全箱数') }}</th>
                        <th class="p-2 w-fit rounded-tr-lg"></th>
                        {{--<th scope="col" class="py-3 px-6">
                            <span class="sr-only">細々</span>
                        </th>--}}
                    </tr>
            </thead>
            </table>
        </div>
    </div>


</x-app-layout>


