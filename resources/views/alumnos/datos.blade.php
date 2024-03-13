<x-layouts.layout>
    <div class="flex justify-center h-full items-center">
        <div class="bg-white p-5 rounded-2xl font-medium leading-6 text-gray-900">
            <h2 class="text-center text-3xl font-semibold leading-7 text-gray-900 pb-3">Datos del alumno</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-3 p-4 border-2 rounded">
                <div class="sm:col-span-2 px-4">
                    <h3 class="underline font-bold text-center pb-4">Datos Personales</h3>
                    <ul class="list-disc">
                        <li><span class="font-bold">Nombre:</span> {{$alumno->nombre}}</li>
                        <li><span class="font-bold">Apellido:</span> {{$alumno->apellido}}</li>
                        <li><span class="font-bold">Dirección:</span> {{$alumno->direccion}}</li>
                    </ul>
                </div>
                <div class="sm:col-span-1 px-4">
                    <h3 class="underline font-bold text-center pb-4">Idiomas</h3>
                    <ul class="text-center">
                        @foreach($alumno->idiomas as $idioma)
                            <li>{{$idioma->idioma}}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="sm:col-span-2 px-4">
                    <h3 class="underline font-bold text-center pb-4">Contacto</h3>
                    <ul class="list-disc">
                        <li><span class="font-bold">Email:</span> {{$alumno->email}}</li>
                        <li><span class="font-bold">Teléfono:</span> {{$alumno->telefono}}</li>
                    </ul>
                </div>
                <div class="sm:col-span-1 px-4"></div>
                <a type="button" class="btn btn-info text-sm font-semibold leading-6 text-gray-900" href="/alumnos">Volver
                    al Listado</a>
            </div>
        </div>
    </div>
</x-layouts.layout>
