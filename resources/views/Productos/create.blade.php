
<x-app-layout>
   
    <div class=" w-full  max-w-xl   mx-auto bg-white  rounded-lg  mt-20 p-5 break-inside:avoid">
        <form action="{{route('productos.store')}}"method="POST" enctype="multipart/form-data">
           @csrf
           <label class="crear__label">nombre de la categoria:
           <br>
          </label> 
           <input class="crear__input" type="text" name="descripcion"
           placeholder="introdusca la descripcion">
           
            <br>
           <label class="crear__label">imagen :
            <br>
           </label> 
             
                <input class="rounded-xl" type="file" name="imagen" id="" accept="image/*">
                @error('imagen')
                  <small class="text-red-500">el archivo debe ser una imagen</small> 
                    
                @enderror
           <br>
           <br>
           <label class="crear__label">marca:
            <br>
           </label> 
            <input class="crear__input" type="text" name="marca"
            placeholder="introdusca la marca">
          
         
           <br>
           <br>
         
            <button class="bg-blue-500 rounded-lg p-1" type="submit">enviar formulario</button>
           <a href="{{route('categorias.index')}}" class="bg-blue-500 rounded-lg p-1" type="submit">volver</a>
        </form>
       
      
      
      </div>
      
  
</x-app-layout>
