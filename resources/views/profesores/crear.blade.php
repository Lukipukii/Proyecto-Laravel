<x-layouts.layout>
    <form class="flex justify-center h-full items-center" method="post" action="/profesores"
          enctype="multipart/form-data">
        @csrf
        <div class="bg-white p-5 rounded-2xl">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Datos del profesor</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                    <div class="mt-2">
                        <input type="text" name="nombre" id="nombre"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @foreach ($errors->get('nombre') as $error)
                        <div class="text-sm text-red-600"> {{$error}}
                        </div>
                    @endforeach
                </div>
                <div class="sm:col-span-3">
                    <label for="apellido"
                           class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                    <div class="mt-2">
                        <input type="text" name="apellido" id="apellido"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @foreach ($errors->get('apellido') as $error)
                        <div class="text-sm text-red-600"> {{$error}}
                        </div>
                    @endforeach

                </div>

                <div class="sm:col-span-4">
                    <label for="email"
                           class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @foreach ($errors->get('email') as $error)
                        <div class="text-sm text-red-600"> {{$error}}
                        </div>
                    @endforeach
                </div>

                <div class="sm:col-span-1">
                    <label for="dni"
                           class="block text-sm font-medium leading-6 text-gray-900">NIF</label>
                    <div class="mt-2">
                        <input id="dni" name="dni" type="text"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @foreach ($errors->get('dni') as $error)
                        <div class="text-sm text-red-600"> {{$error}}
                        </div>
                    @endforeach
                </div>

                <div class="sm:col-span-1">
                    <label for="departamento"
                           class="block text-sm font-medium leading-6 text-gray-900">Departamento</label>
                    <div class="mt-2">
                        <select id="departamento" name="departamento"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>BBDD</option>
                            <option>Entonos de Desarrollo</option>
                            <option>Inglés</option>
                            <option>FOL</option>
                            <option>Programación</option>
                            <option>LMS</option>
                            <option>Sistemas</option>
                        </select>
                    </div>
                </div>
                <a type="button" class="btn btn-ghost text-sm font-semibold leading-6 text-gray-900"
                   href="/profesores">Volver
                    al Listado</a>
                <button type="submit"
                        class="btn btn-success rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Añadir
                </button>
            </div>
        </div>
    </form>
</x-layouts.layout>
