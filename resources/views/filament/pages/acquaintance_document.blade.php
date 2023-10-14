<x-filament-panels::page>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <x-filament::button  onclick="window.print()" style="width: 8rem !important" color="gray" class="print">
        طباعة
    </x-filament::button>

    <div class="flex items-center justify-center">
        <div class="print:w-full w-2/3 border-4 border-zinc-800 text-right px-3">
            <div class="w-full">
                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>الرقم العسكري</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->military_number}}</span>
                    </div>


                    <div class="w-full">
                        <span><strong>الاسم</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->name}}</span>
                    </div>


                    <div class="w-1/2">
                        <span><strong>الدفعة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->batch}}</span>
                    </div>

                    <div class="w-3/5">
                        <span><strong>اللياقة الطبية</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">({{$data->medical_fitness}})</span>
                    </div>


                </div>


                <div class="flex items-center py-3">
                    <div class="w-full">
                        <span><strong>تاريخ الالتحاق بالكلية</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->date_of_joining_the_college}}</span>
                    </div>

                    <div class="w-full">
                        <span><strong>تاريخ بدء الطيران</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->flight_start_date}}</span>
                    </div>

                </div>


                <div class="flex items-center py-3">


                    <div class="w-full">
                        <span><strong>تاريخ الميلاد</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->date_of_birth}}</span>
                    </div>

                    <div class="w-full">
                        <span><strong>جهة الميلاد</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->Place_of_birth}}</span>
                    </div>



                    <div class="w-full">
                        <span><strong>المحافظة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->Governorate}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>اسم ولي الامر</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->fathers_name}}</span>
                    </div>

                    <div class="w-full">
                        <span><strong>وظيفتة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->fathers_job}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>اسم الوالدة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->mothers_name}}</span>
                    </div>

                    <div class="w-full">
                        <span><strong>وظيفتها</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->mothers_job}}</span>
                    </div>

                </div>


                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>عنوان ولي الامر</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->fathers_address}}</span>
                    </div>


                    <div class="w-full">
                        <span><strong>التليفون</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->fathers_phone}}</span>
                    </div>


                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>اسم اقرب الاقارب</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->name_of_the_closest_person}}</span>
                    </div>


                    <div class="w-full">
                        <span><strong>وظيفتة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->the_closest_person_jop}}</span>
                    </div>

                    <div class="w-full">
                        <span><strong>التليفون</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->the_closest_person_phone}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">


                    <div class="w-1/2">
                        <span><strong>عدد افراد الاسرة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->number_of_family_members}}</span>
                    </div>

                    <div class="w-full">
                        <span><strong>عدد الاشقاء و الترتيب بينهم</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600"> {{$data->number_of_brothers}} </span>
                    </div>


                    <div class="w-1/2">
                        <span><strong>ذكور</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->males}}</span>
                    </div>

                    <div class="w-1/2">
                        <span><strong>اناث</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->females}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>وظيفة الاشقاء</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->brothers_jop}}</span>
                    </div>
                </div>


                <div class="flex items-center py-3">


                    <div class="w-full">
                        <span><strong>هل الوالدين منفصلين؟</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">({{$data->parents_separated == 0 ? 'نعم' : 'لا'}})</span>
                    </div>

                    <div class="w-full">
                        <span><strong>تاريخ الانفصال</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->date_of_separation}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">


                    <div class="w-full">
                        <span><strong>دخل الاسرة الشهري</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->family_income_per_month}}</span>
                    </div>

                    <div class="w-full">
                        <span><strong>يذكر مصادر الدخل</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->sources_of_income}}</span>
                    </div>


                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>اخر مؤهل دراسي حاصل علية الطالب قبل الالتحاق بالكلية</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->latest_academic_qualification}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">


                    <div class="w-full">
                        <span><strong>تاريخ الحصول علي اخر مؤهل دراسي</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->date_of_obtaining_the_latest_academic_qualifications}}</span>
                    </div>

                    <div class="w-full">
                        <span><strong>الشعبة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->section}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>المدرسة او الجهة التي حصل منها علي الشهادة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->the_entity_from_which_he_obtained_a_qualification}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>النسبة المؤية الحاصل عليها في الثانوية العامة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->percentage_in_high_school}}</span>
                    </div>

                </div>


                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>اللغة الاجنبية الاولي</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">({{$data->first_foreign_language == 0 ?  'الانجليزية' : 'الفرنسية'}})</span>
                    </div>

                    <div class="w-full">
                        <span><strong>الدرجة الحاصل عليها</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->degree_he_earned}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>عدد سنوات الدراسة الثانوية</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->the_number_of_years_of_schooling_in_high_school}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>البطولات الرياضية</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->sports_tournaments}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>الهوايات</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->hobbies}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>رغبة الطالب في الطيران</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">(
                            {{
                                $data->the_students_desire_to_fly == 0 ? 'مقاتلات'
                                : ($data->the_students_desire_to_fly == 1 ? 'هليكوبتر'
                                : ($data->the_students_desire_to_fly == 2 ? 'مواصلات' : 'جوي'))

                            }}
                        )</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>نوع الطراز</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->model_type}}</span>
                    </div>

                </div>

                <div class="flex items-center py-3">


                    <div class="w-full">
                        <span><strong>توقيع الطالب</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->student_signature}}</span>
                    </div>


                    <div class="w-full">
                        <span><strong>توقيع المدرس</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->teachers_signature}}</span>
                    </div>

                    <div class="w-full">
                        <span><strong>توقيع قائد السرب</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">{{$data->signature_of_the_squadron_commander}}</span>
                    </div>

                </div>
            </div>



        </div>
    </div>


</x-filament-panels::page>

