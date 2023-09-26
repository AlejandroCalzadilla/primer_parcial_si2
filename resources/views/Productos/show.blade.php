<x-app-layout>

   <div class=" w-full  max-w-xl   mx-auto bg-white  rounded-lg  mt-20 p-5 break-inside:avoid">
       
        <a href="{{route('categorias.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700
         focus:outline-none dark:focus:ring-blue-800"> Volver </a>
       
         
      
        <br>
        <br>
        <div class="flex justify-start bg-slate-400 rounded-lg">
        <p class="mr-10">id: {{$categoria->id}}</p>
        <h1>categoria : {{$categoria->nombre}} </h1>
        </div> 
        <br>
       @if (session('success'))
          <div>
             {{session('success')}}
          </div> 
        @endif    
      
      
        


  </div>        




</x-app-layout>