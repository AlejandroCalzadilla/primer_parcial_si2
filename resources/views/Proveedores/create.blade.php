
<x-app-layout>
    <br>
    <div class="w-full h-full max-w-xl mx-auto bg-white shadow-lg rounded-lg ">
        <form action="{{route('tallas.store')}}"method="POST">
           @csrf
           <label class="crear__label">Talla:
           <br>
          </label> 
           <input class="crear__input" type="text" name="medida"
           placeholder="introdusca la talla">
           <br>
           <br>
          
          
           <br>
           <button class="bg-blue-500 rounded-lg p-1" type="submit">enviar formulario</button>
        </form>
       
      
      
      
      </div>
      
  
</x-app-layout>
