<x-filament-panels::page>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <x-filament::button  onclick="window.print()" style="width: 8rem !important" color="gray" class="print">
        طباعة
    </x-filament::button>

    <div class="flex items-center content justify-center">
        <div class="print:w-full w-2/3  border-4 border-zinc-800">
            <table class="w-full table-auto  border border-zinc-800">
                <thead>
                    <tr>
                      <th class="border border-zinc-800">م</th>
                      <th class="border border-zinc-800">اسم الاختبار</th>
                      <th class="border border-zinc-800">التاريخ</th>
                      <th class="border border-zinc-800">درجه الطالب</th>
                      <th class="border border-zinc-800">الدرجه النهائيه</th>
                      <th class="border border-zinc-800">المتوسط</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    {{-- ['id' , 'exam_id' , 'student_paper_id' , 'date' , 'degree' , 'final_degree']; --}}
                    <tr>
                      <td class="border border-zinc-800">{{$data->id}}</td>
                      <td class="border border-zinc-800">{{$data->exams->name}}</td>
                      <td class="border border-zinc-800">{{$data->date}}</td>
                      <td class="border border-zinc-800">{{$data->degree}}</td>
                      <td class="border border-zinc-800">{{$data->final_degree}}</td>
                      <td class="border border-zinc-800">&Sacute;</td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>
</x-filament-panels::page>

