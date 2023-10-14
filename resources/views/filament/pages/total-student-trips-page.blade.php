<x-filament-panels::page>

@vite(['resources/css/app.css', 'resources/js/app.js'])


<x-filament::button  onclick="window.print()" style="width: 8rem !important" color="gray" class="print">
    طباعة
</x-filament::button>

<div class="flex items-center content justify-center">
    <div class="print:w-full w-2/3  border-4 border-zinc-800">
        <table class="w-full table-auto  border border-zinc-800">
            <thead>
                <tr class="print:bg-gray-200 bg-gray-200">
                    <td class="text-center border border-zinc-800">التاريخ</td>
                    <td class="text-center border border-zinc-800">المدرس</td>
                    <td class="text-center border border-zinc-800">الدرس</td>
                    <td colspan="5" class="text-center border border-zinc-800">
                        <div class="border-b border-zinc-800">
                            ساعات
                        </div>

                        <div class="flex w-full border-b border-zinc-800">
                            <div class="w-full border-l border-zinc-800">
                                مزدوج
                            </div>

                            <div class="w-full border-l border-zinc-800">
                                مجموع المزدوج
                            </div>

                            <div class="w-full border-l border-zinc-800">
                                منفرد
                            </div>

                            <div class="w-full border-l border-zinc-800">
                                مجموع المنفرد
                            </div>

                            <div class="w-full border-l border-zinc-800">
                                الكلي
                            </div>
                        </div>

                        <div class="flex w-full">
                            <div class="w-full flex">
                                <div class="w-full border-l border-zinc-800">
                                    ق
                                </div>
                                <div class="w-full border-l border-zinc-800">
                                    س
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-full border-l border-zinc-800">
                                    ق
                                </div>
                                <div class="w-full border-l border-zinc-800">
                                    س
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-full border-l border-zinc-800">
                                    ق
                                </div>
                                <div class="w-full border-l border-zinc-800">
                                    س
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-full border-l border-zinc-800">
                                    ق
                                </div>
                                <div class="w-full border-l border-zinc-800">
                                    س
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-full border-l border-zinc-800">
                                    ق
                                </div>
                                <div class="w-full border-l border-zinc-800">
                                    س
                                </div>
                            </div>



                        </div>

                    </td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="text-center border border-zinc-800">{{$data->date}}</td>
                    <td class="text-center border border-zinc-800">{{$data->teacher}}</td>
                    <td class="text-center border border-zinc-800">{{$data->lesson->lesson_name}}</td>
                    <td colspan="5" class="text-center border border-zinc-800">
                        <div class="flex w-full">
                            <div class="w-full flex">
                                <div class="w-full border-l border-zinc-800">
                                    {{$data->double}}
                                </div>
                                <div class="w-full border-l border-zinc-800">
                                    &gacute;
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-full border-l border-zinc-800">
                                    {{$data->double_total}}
                                </div>
                                <div class="w-full border-l border-zinc-800">
                                    &gacute;
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-full border-l border-zinc-800">
                                    {{$data->single}}
                                </div>
                                <div class="w-full border-l border-zinc-800">
                                    &gacute;
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-full border-l border-zinc-800">
                                    {{$data->single_total}}
                                </div>
                                <div class="w-full border-l border-zinc-800">
                                    &gacute;
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-full border-l border-zinc-800">
                                    {{$data->total_summation}}
                                </div>
                                <div class="w-full border-l border-zinc-800">
                                    &gacute;
                                </div>
                            </div>


                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</x-filament-panels::page>
