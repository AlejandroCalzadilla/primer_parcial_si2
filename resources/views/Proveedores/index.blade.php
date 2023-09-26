<x-app-layout>

           
            <div class=" w-full  max-w-xl   mx-auto bg-white  rounded-lg  mt-20 p-5 break-inside:avoid">
               
                <div class="m-0 flex justify-between items-center break-inside:avoid ">
                 <h1 class="m-0  text-2xl font-bold"> 
                  Crear Tallas</h1>
                 <a href="{{route('tallas.create')}}" class=" m-0 btn text-white p-1 bg-sky-500 rounded-lg  mr-5 pl-5 pr-5">crear</a>
               </div>  
                <br>
               <table class=" table-fixed  m-0  table-striped table-bordered table-hover w-full ">
                <thead class=" bg-gray-200 rounded-lg">
                <tr >
                  <th class="text-center">ID</th>
                  <th class="text-center">Medida</th>
                  <th class=" text-center"></th>
                </tr>  
                </thead >
                <tbody class="mt-3">
                  @foreach ($tallas as $talla)
                  <tr>
                    <td class="text-center">{{ $talla->id }}</td>
                    <td class="text-center">{{ $talla->medida }}</td>
                    <td class="flex justify-between">
                     <div class=" flex justify-start">
                      <a href="{{route('tallas.show',$talla->id)}}" class="btn text-white p-1 bg-green-300 rounded-lg ">ver</a>
                      <a href="{{route('tallas.create')}}" class="btn text-white p-1 bg-sky-500 rounded-lg mr-2 ml-3">Editar</a>
                      <form action="{{ route('tallas.destroy', $talla) }}" method="post">
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