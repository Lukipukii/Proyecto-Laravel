<x-layouts.layout>
    <form class="flex justify-center h-full items-center" method="post" action="{{route("alumnos.update" ,[$alumno->id,'page'=>$page])}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="bg-white p-5 rounded-2xl">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Datos del alumno</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                    <div class="mt-2">
                        <input type="text" name="nombre" id="nombre" value="{{$alumno->nombre}}"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="apellido" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                    <div class="mt-2">
                        <input type="text" name="apellido" id="apellido" value="{{$alumno->apellido}}"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" value="{{$alumno->email}}"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="telefono" class="block text-sm font-medium leading-6 text-gray-900">Teléfono</label>
                    <div class="mt-2">
                        <input id="telefono" name="telefono" type="text" value="{{$alumno->telefono}}"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="direccion" class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
                    <div class="mt-2">
                        <input type="text" name="direccion" id="direccion" value="{{$alumno->direccion}}"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="idiomas"></label>
                    <input type="checkbox" name="options[]" id="idiomas" value="Politics"/> Politics<br/>
                    <input type="checkbox" name="options[]" id="idiomas" value="Movies"/> Movies<br/>
                    <input type="checkbox" name="options[]" id="idiomas" value="World "/> World<br/>
                    <input type="submit" value="Go!" />
                </div>
                <a type="button" class="btn btn-ghost text-sm font-semibold leading-6 text-gray-900" href="/alumnos">Volver al Listado</a>
                <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Editar
                </button>
            </div>
        </div>
    </form>
</x-layouts.layout>
