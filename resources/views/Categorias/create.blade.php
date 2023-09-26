
<x-app-layout>
   
    <div class=" w-full  max-w-xl   mx-auto bg-white  rounded-lg  mt-20 p-5 break-inside:avoid">
        <form action="{{route('categorias.store')}}"method="POST">
           @csrf
           <label class="crear__label">nombre de la categoria:
           <br>
          </label> 
           <input class="crear__input" type="text" name="nombre"
           placeholder="introdusca el nombre ">
            <br>
           <label class="crear__label">genero de la categoria:
            <br>
           </label> 
            <input class="crear__input" type="text" name="genero"
            placeholder="introdusca el genero ">
           <br>
           
           <br>
           
           <button class="bg-blue-500 rounded-lg p-1" type="submit">enviar formulario</button>
           <a href="{{route('categorias.index')}}" class="bg-blue-500 rounded-lg p-1" type="submit">volver</a>
        </form>
       
      
      
      </div>
      
  
</x-app-layout>
