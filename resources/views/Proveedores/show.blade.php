<x-app-layout>

        

    <div class="w-full h-full max-w-xl mx-auto bg-white shadow-lg rounded-lg p-5 mt-300 mt-0">
      <a href="{{route('tallas.index')}}">volver a categorias</a>
      <br>
      <a href="{{route('tallas.edit',$talla)}}">editar categoria</a>
      <p>id {{$talla->id}}</p>
      <h1> Talla {{$talla->medida}} </h1>
      
       @if (session('success'))
          <div>
             {{session('success')}}
          </div> 
        @endif    
      
      
       <form action="{{route('tallas.destroy',$talla)}}}" method="POST">
          @csrf
          @method('delete')
          <button type="submit">eliminar</button>
       </form>  



  </div>


</x-app-layout>