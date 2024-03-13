<x-layouts.layout>

    <form class="flex justify-center h-full items-center" method="post" action="/alumnos" enctype="multipart/form-data">
        @csrf
        <div class="bg-white p-5 rounded-2xl">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Datos del alumno</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                    <div class="mt-2">
                        <input type="text" name="nombre" id="nombre"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="apellido" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                    <div class="mt-2">
                        <input type="text" name="apellido" id="apellido"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="telefono" class="block text-sm font-medium leading-6 text-gray-900">Teléfono</label>
                    <div class="mt-2">
                        <input id="telefono" name="telefono" type="text"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="direccion" class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
                    <div class="mt-2">
                        <input type="text" name="direccion" id="direccion"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-full">
                    <label class="block text-sm font-medium leading-6 text-gray-900" for="idiomas">Selecciona los idiomas que hablas:</label><br>
                    <?php
                    $idiomas = ["Francés", "Inglés", "Alemán", "Ruso", "Rumano", "Portugués",
                        "Catalán", "Gallego", "Fabla", "Vasco", "Italiano", "Chino"];

                    foreach ($idiomas as $idioma) {
                        echo '<div class="inline-block px-3">';
                        echo '<input type="checkbox" id="' . $idioma . '" name="idioma[]" value="' . $idioma . '">';
                        echo '<label class="inline text-sm font-medium leading-6 text-gray-900" for="' . $idioma . '">' . $idioma . '</label><br>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <a type="button" class="btn btn-ghost text-sm font-semibold leading-6 text-gray-900" href="/alumnos">Volver
                    al Listado</a>
                <button type="submit"
                        class="btn btn-success rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Añadir
                </button>
            </div>
        </div>
    </form>
</x-layouts.layout>
