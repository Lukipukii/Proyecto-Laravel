<x-layouts.layout>
    <div class="container max-h-full overflow-x-auto text-black mx-auto">
                <table class="table table-sm text-center">
                    <tr>
                        <th class="w-4/5">Alumno</th>
                        <td>
                            <a class="btn btn-success w-full" href="/alumnos/create">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @foreach($alumnos as $alumno)
                        <tr class="hover:bg-amber-200 hover:cursor-pointer" onclick="editarAlumno({{$alumno->id}})">
                    <td>{{$alumno->nombre}} {{$alumno->apellido}}</td>
                    <td>
                        <div class="flex justify-center">
                            <form action="/alumnos/{{$alumno->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-error mx-5" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                    </svg>
                                </button>
                            </form>

                            <a class="btn btn-info mx-5" href="{{route("alumnos.edit" ,[$alumno->id,'page'=>$page])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="mx-10">
        {{ $alumnos ->links("pagination::simple-tailwind") }}
        </div>
    </div>
    <script>
        function editarAlumno (alumnoID) {
            window.location = `http://localhost:8000/alumnos/${alumnoID}`;
        }
    </script>
</x-layouts.layout>
