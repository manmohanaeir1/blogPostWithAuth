<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit_posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white"> 
                 <h1>   Edit Post</h1>
                 
                 @if(session()->has('success'))
                 <div class="mt-5">
                     <div class="alert alert-success">
                         {{session('success')}}
                     </div>
                 </div>
                 @endif
                 <div class="w-full max-w-xs">
                    <div class=" mt-3 mb-3">
                        <form method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control"  name="title" value="{{$post->title}}">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1" class="form-label" >Enter description</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3" >{{$post->body}}</textarea>      
                           </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>


                          <p class="text-center text-gray-500 text-xs">
                            &copy;2023 Acme Corp. All rights reserved.
                          </p>
                    
                  </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
