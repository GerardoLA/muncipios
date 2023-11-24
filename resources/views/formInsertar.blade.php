<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FormInsertar') }} 
        </h2>
    </x-slot> -->

    <h2>Formulario Municipio</h2>
    <form action = "{{route('formInsertar')}}" method="POST">
        @csrf
        <label for="nombre">   Nombre poblacion : </label>
        <input type = "text" name = "nombre" value="" />
        <label for="numGasolineras">   Numero gasolineras : </label>
        <input type = "text" name = "numGasolineras" value="" />
        <input type = "submit" value = "Enviar" />
    </form>
</x-app-layout>