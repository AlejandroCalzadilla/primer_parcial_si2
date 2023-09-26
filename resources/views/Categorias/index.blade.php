<x-app-layout>

   
  <div class=" w-full  max-w-xl   mx-auto bg-white  rounded-lg  mt-20 p-5 break-inside:avoid">
               
    <div class="m-0 flex justify-between items-center break-inside:avoid ">
     <h1 class="m-0  text-2xl font-bold"> 
      Categorias</h1>
     <a href="{{route('categorias.create')}}" class=" m-0 btn text-white p-1 bg-blue-500 rounded-lg  mr-5 pl-5 pr-5">crear</a>
   </div>  
    <br>
    
   <table class=" table-fixed  m-0  table-striped table-bordered table-hover w-full ">
    <thead class=" bg-gray-200 rounded-lg">
    <tr >
      <th class="text-center">
        ID</th>
      <th class="text-center">Nombre</th>
      <th class="text-center">genero</th>
      <th class=" text-center"></th>
    </tr>  
    </thead >
    <tbody class="mt-3">
      @foreach ($categorias as $categoria)
      <tr>
      
          <td class="text-center bg-green-300">  <a href="{{route('categorias.show',$categoria->id)}}"> {{ $categoria->id }}  </a></td>
       
        <td class="text-center">{{ $categoria->nombre }}</td>
        
        <td class="text-center">{{ $categoria->genero}}</td>
        <td class="flex justify-between">
         <div class=" flex justify-normal">
          
          <a href="{{route('categorias.create')}}" class="btn text-white p-1 bg-blue-500 rounded-lg mr-2 ml-2">Editar</a>
          <form action="{{ route('categorias.destroy', $categoria) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn bg-red-500 p-1 text-white rounded-lg ml-2 mt-0">Eliminar</button>
          </form>
           </div>
        
        </td>
        
      </tr>
       
      @endforeach     
    </tbody>  
    </tr>
   </table> 
  
 </div>
             











         

        
       




      </x-app-layout>